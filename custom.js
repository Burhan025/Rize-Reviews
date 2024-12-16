(function($) {
	
	var gDebug = true;
    
    function logDebugMessageToConsole( msg ) {
		if ( gDebug ) {
			console.log( msg );
		}
	}

	/**
	 * @credit https://stackoverflow.com/a/23945027
	 * @param {String} url
	 * @returns {String}
	 */
	function extractHostname(url) {
		var hostname;
		//find & remove protocol (http, ftp, etc.) and get hostname

		if (url.indexOf("//") > -1) {
			hostname = url.split('/')[2];
		}
		else {
			hostname = url.split('/')[0];
		}

		//find & remove port number
		hostname = hostname.split(':')[0];
		//find & remove "?"
		hostname = hostname.split('?')[0];

		return hostname;
	}

	/**
	 * @credit https://stackoverflow.com/a/23945027
	 * @param {String} url
	 * @returns {String}
	 */
	function extractRootDomain(url) {
		var domain = extractHostname(url),
			splitArr = domain.split('.'),
			arrLen = splitArr.length;

		//extracting the root domain here
		//if there is a subdomain
		if (arrLen > 2) {
			domain = splitArr[arrLen - 2] + '.' + splitArr[arrLen - 1];
			//check to see if it's using a Country Code Top Level Domain (ccTLD) (i.e. ".me.uk")
			if (splitArr[arrLen - 2].length == 2 && splitArr[arrLen - 1].length == 2) {
				//this is using a ccTLD
				domain = splitArr[arrLen - 3] + '.' + domain;
			}
		}
		return domain;
	}

	/**
	 * Get a URL parameter by name
	 * @param {String} name
	 * @returns {string}
	 */
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

    logDebugMessageToConsole( 'custom.js' );

	$('.page-template-full-width-ppc-template').addClass('home');

    var originalReferrer = localStorage.getItem( 'originalReferrer' );
    
    logDebugMessageToConsole( 'originalReferrer: ' + originalReferrer );

	if ( ! originalReferrer ) {
		logDebugMessageToConsole( 'originalReferrer not set.' );
		if ( document.referrer ) {
            logDebugMessageToConsole(  'document.referrer exists. Setting originalReferrer to document.referrer.' );
            originalReferrer = extractRootDomain( document.referrer );
		} else {
            logDebugMessageToConsole( "document.referrer doesn't exist." );
			if ( window.location.hostname && window.location.pathname ) { // should always exist, but just in case
				// If pathname just contains a forward slash, let's just set it to the hostname
				if ( '/' === window.location.pathname ) {
                    originalReferrer = window.location.hostname;
				} else {
                    originalReferrer = window.location.hostname + window.location.pathname;
				}
                logDebugMessageToConsole( "window.location.hostname & window.location.pathname exists. Setting originalReferrer to window.location.hostname & window.location.pathname." );
			}
		}
        logDebugMessageToConsole( 'originalReferrer: ' + originalReferrer );
		if ( originalReferrer ) {
            localStorage.setItem('originalReferrer', originalReferrer);
        }
	}
	
	if ( originalReferrer ) {
        $( '#input_3_16, #input_6_16, #input_9_16' ).val( originalReferrer );
    }
	

	/**
	 * UTM Tracking for certain Gravity Forms (currently: #3, #6, #9)
	 */

	// Key - Local Storage Key
	// Value 1 - Url Parameter
	// Value 2 - Gravity Form Field Id
	var utmParameterData = {
		'utmSource' : [
			'utm_source',
			['input_3_10', 'input_6_10', 'input_9_10']
		],
		'utmMedium' : [
			'utm_medium',
			['input_3_11', 'input_6_11', 'input_9_11']
		],
		'utmCampaign' : [
			'utm_campaign',
			['input_3_12', 'input_6_12', 'input_9_12']
		],
		'utmTerm' : [
			'utm_term',
			['input_3_13', 'input_6_13', 'input_9_13']
		],
		'utmContent' : [
			'utm_content',
			['input_3_14', 'input_6_14', 'input_9_14']
		],
		'userID' : [
			'userID',
			['input_6_17', 'input_9_17']
		]
	};

	// Add the UTM parameters to storage if they haven't been already
	$.each( utmParameterData, function( localStorageKey, data ) {
		if ( ! localStorage.getItem( localStorageKey ) ) {
			//logDebugMessageToConsole( 'LocalStorageKey "' + localStorageKey + '" not set.' );
			var value = getParameterByName( data[0] );
			//logDebugMessageToConsole( 'URL Parameter value: ' + value );
			if ( value ) {
				//logDebugMessageToConsole( 'Updating storage...' );
				localStorage.setItem( localStorageKey, value );
			} else {
				//logDebugMessageToConsole( 'Value empty...' );
				if ( 'utmSource' === localStorageKey && originalReferrer ) {
					//logDebugMessageToConsole( 'Is UTM Source. Setting value to original referrer: "' + originalReferrer + '"' );
					localStorage.setItem( localStorageKey, originalReferrer );
				}
			}
		} else {
			//logDebugMessageToConsole( 'LocalStorageKey "' + localStorageKey + '" already set.' );
			//logDebugMessageToConsole( 'Value: ' + localStorage.getItem( localStorageKey ) );
		}
		$.each( data[1], function( idx, inputId ) {
			var $formField = $( '#' + inputId );
			if ( $formField.length ) {
				$formField.val( localStorage.getItem( localStorageKey ) );
			}
		});
	});

    // $(document).ready(function () { 
    // 	if($(window).width() < 767){ 
    //  $(".reviewmgr-lookup div iframe").height("400");

    // 	}

    // });

    var $commentForm = $( "#commentform" );
    if ( $commentForm.length ) {
    	$commentForm.validate({
            rules: {
                comment: {
                    required: true,
                    minlength: 2
                },

                email: {
                    required: true,
                    email: true
                },

                author: {
                    required: true
                }
            }
        });
    }

})(jQuery);

 


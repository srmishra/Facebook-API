facebookApi
===========

Post in Facebook wall using the Facebook SDK in PHP

Facebook Auth Token Generation Steps:

Step 1.  https://www.facebook.com/dialog/oauth?client_id=APP_ID&redirect_uri=WHERE_YOU_WILL_PRINT_GET_VARS&scope=manage_pages,publish_actions

==================> returns CODE.


Step 2.  https://graph.facebook.com/oauth/access_token?client_id=APP_ID&redirect_uri=WHERE_YOU_WILL_PRINT_GET_VARS&client_secret=APP_SECRET&code=YOUR_CODE_AFTER_FIRST_URL

==================> returns access_token AND expiration.


step 3. https://graph.facebook.com/me/accounts?access_token=ACCESS_TOKEN_FROM_SECOND_URL

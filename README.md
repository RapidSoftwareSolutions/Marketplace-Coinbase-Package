[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Coinbase/functions?utm_source=RapidAPIGitHub_CoinbaseFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Coinbase Package
Connect to the Coinbase Digital Currency API to make bitcoin/ethereum transactions and get real-time data. Test an API call and export the code into your app.
* Domain: coinbase.com
* Credentials: clientId, clientSecret, apiKey, secretKey

## How to get credentials: 
0. Sign up in [Coinbase](https://www.coinbase.com/signup), and verify your email. 
1. Navigate to [Settings/API Access](https://www.coinbase.com/settings/api).
2. Click "New OAuth2 Application", fill all required fields.
3. Your app will appear in ["My OAuth2 Applications"](https://www.coinbase.com/settings/api#oauth_applications) section. Open it.
4. Use Client ID and Client Secret as credentials.

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Coinbase.getAccessToken
Geta access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client identifier.
| clientSecret| credentials| Client secret.
| redirectUri | String     | URL in your app where users will be sent after authorization.
| code        | String     | A one-time use code that may be exchanged for a bearer token.

## Coinbase.refreshAccessToken
Refresh access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client identifier.
| clientSecret| credentials| Client secret.
| refreshToken| String     | The refresh token retrieved during the initial request for an access token.

## Coinbase.revokeAccessToken
RevokeAccessToken.

| Field| Type  | Description
|------|-------|----------
| token| String| Active access token.

## Coinbase.getNotifications
Lists notifications where the current user was the subscriber. Scopes: wallet:notifications:read

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API Key.
| secretKey| credentials| Your API Secret.

## Coinbase.getSingleNotification
Show a notification for which the current user was a subsciber. Scopes: wallet:notifications:read

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| secretKey      | credentials| Your API Secret.
| notificationsId| String     | Single notification identifier.

## Coinbase.getUser
Get any user’s public information with their ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| User identifier.

## Coinbase.getMe
Get current user’s public information. Scope: wallet:user:read,wallet:user:email

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.getMyAuthInfo
Get current user’s authorization information including granted scopes.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.updateMe
Modify current user and their preferences. Scope: wallet:user:update

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| name          | String| User’s public name.
| timeZone      | String| Time zone.
| nativeCurrency| String| Local currency used to display amounts converted from BTC.

## Coinbase.getAccounts
Lists current user’s accounts to which the authentication method has access to. Scope: wallet:accounts:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.getSingleAccount
Show current user’s account. Scopes: wallet:accounts:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Current user account identifier.

## Coinbase.createAccount
Creates a new account for user. Scopes: wallet:accounts:create

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| Account name.

## Coinbase.setAccountAsPrimary
Promote an account as primary account. Scopes: wallet:accounts:update

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.updateAccount
UpdateAccount. Scopes: wallet:accounts:update

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| name       | String| Account name

## Coinbase.deleteAccount
Removes user’s account. Scopes: wallet:accounts:delete

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getAddresses
Lists addresses for an account. Scopes: wallet:addresses:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getSingleAddress
GetSingleAddress. Scopes: wallet:addresses:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| addressId  | String| Address identifier.

## Coinbase.getAddressTransactions
List transactions that have been sent to a specific address. Scopes: wallet:transactions:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| addressId  | String| Address identifier.

## Coinbase.createAddress
Creates a new address for an account. Scopes: wallet:addresses:create

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| name       | String| Address label.

## Coinbase.getTransactions
Lists account’s transactions. Scopes: wallet:transactions:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getSingleTransaction
Show an individual transaction for an account. Scopes: wallet:transactions:read

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token.
| accountId    | String| Account identifier.
| transactionId| String| Transaction identifier.

## Coinbase.sendMoney
Send funds to a bitcoin address, ethereum address, or email address. Scopes: wallet:transactions:send

| Field            | Type   | Description
|------------------|--------|----------
| accessToken      | String | Access token.
| to               | String | A bitcoin address, ethereum address, or an email of the recipient.
| amount           | String | Amount to be sent.
| currency         | String | Currency for the amount.
| description      | String | Notes to be included in the email that the recipient receives.
| skipNotifications| Boolean| Don’t send notification emails for small amounts.
| fee              | String | Transaction fee in BTC if you would like to pay it.
| idem             | String | A token to ensure idempotence.

## Coinbase.transferAccountsMoney
Transfer bitcoin or ethereum between two of a user’s accounts. Scopes: wallet:transactions:transfer

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| to         | String| ID of the receiving account.
| amount     | String| Amount to be transferred.
| currency   | String| Currency for the amount.
| description| String| Notes to be included in the transfer.

## Coinbase.requestMoney
Requests money from an email address. Scopes: wallet:transactions:request

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| to         | String| An email of the recipient.
| amount     | String| Amount to be requested.
| currency   | String| Currency for the amount.
| description| String| Notes to be included in the email that the recipient receives.

## Coinbase.completeRequestMoney
Lets the recipient of a money request complete the request by sending money to the user who requested the money. Scopes: wallet:transactions:request

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token.
| accountId    | String| Account identifier.
| transactionId| String| Transaction identifier.

## Coinbase.resendMoneyRequest
Lets the user resend a money request. Scopes: wallet:transactions:request

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token.
| accountId    | String| Account identifier.
| transactionId| String| Transaction identifier.

## Coinbase.cancelRequestMoney
Lets a user cancel a money request. Scopes: wallet:transactions:request

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token.
| accountId    | String| Account identifier.
| transactionId| String| Transaction identifier.

## Coinbase.getBuys
Lists buys for an account. Scopes: wallet:buys:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getSingleBuy
Show an individual buy. Scopes: wallet:buys:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| buyId      | String| Individual buy identifier.

## Coinbase.placeBuyOrder
Buys a user-defined amount of bitcoin or ethereum. Scopes: wallet:buys:create

| Field               | Type   | Description
|---------------------|--------|----------
| accessToken         | String | Access token.
| accountId           | String | Account identifier.
| amount              | String | Buy amount without fees.
| total               | String | Buy amount with fees (alternative to amount).
| currency            | String | Currency for the amount.
| paymentMethod       | String | The ID of the payment method that should be used for the buy.
| agreeBtcAmountVaries| Boolean| Whether or not you would still like to buy if you have to wait for your money to arrive to lock in a price.
| commit              | Boolean| If set to false, this buy will not be immediately completed.
| quote               | Boolean| If set to true, response will return an unsave buy for detailed price quote.

## Coinbase.commitBuy
Completes a buy that is created in commit: false state. Scopes: wallet:buys:create

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| buyId      | String| Individual buy identifier.

## Coinbase.getSells
Lists sells for an account. Scopes: wallet:sells:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getSingleSell
Show an individual sell. Scopes: wallet:sells:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| sellId     | String| Individual sell identifier.

## Coinbase.placeSellOrder
Sells a user-defined amount of bitcoin or ethereum. Scopes: wallet:sells:create

| Field               | Type   | Description
|---------------------|--------|----------
| accessToken         | String | Access token.
| accountId           | String | Account identifier.
| amount              | String | Sell amount.
| total               | String | Sell amount with fees.
| currency            | String | Currency for the amount.
| paymentMethod       | String | The ID of the payment method that should be used for the sell.
| agreeBtcAmountVaries| Boolean| Whether or not you would still like to sell if you have to wait for your money to arrive to lock in a price.
| quote               | Boolean| f set to true, response will return an unsave sell for detailed price quote.

## Coinbase.commitSell
Completes a sell that is created in commit: false state. Scopes: wallet:sells:create

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| sellId     | String| Individual sell identifier.

## Coinbase.getDeposits
Lists deposits for an account. Scopes: wallet:deposits:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getSingleDeposit
Show an individual deposit. Scopes: wallet:deposits:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| depositId  | String| Deposit identifier.

## Coinbase.depositFunds
Deposits user-defined amount of funds to a fiat account. Scopes: wallet:deposits:create

| Field        | Type   | Description
|--------------|--------|----------
| accessToken  | String | Access token.
| accountId    | String | Account identifier.
| amount       | String | Deposit amount.
| currency     | String | Currency for the amount.
| paymentMethod| String | The ID of the payment method that should be used for the deposit.
| commit       | Boolean| If set to false, this deposit will not be immediately completed.

## Coinbase.commitDeposit
Completes a deposit that is created in commit: false state. Scopes: wallet:deposits:create

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.
| depositId  | String| Deposit identifier.

## Coinbase.getWithdrawals
Lists withdrawals for an account. Scopes: wallet:withdrawals:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| accountId  | String| Account identifier.

## Coinbase.getSingleWithdrawal
Show an individual withdrawal. Scopes: wallet:withdrawals:read

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| accountId   | String| Account identifier.
| withdrawalId| String| Withdrawal identifier.

## Coinbase.withdrawFunds
Withdraws user-defined amount of funds from a fiat account. Scopes: wallet:withdrawals:create

| Field        | Type   | Description
|--------------|--------|----------
| accessToken  | String | Access token.
| accountId    | String | Account identifier.
| amount       | String | Withdrawal amount.
| currency     | String | Currency for the amount.
| paymentMethod| String | The ID of the payment method that should be used for the withdrawal.
| commit       | Boolean| If set to false, this withdrawal will not be immediately completed.

## Coinbase.commitWithdrawal
Completes a withdrawal that is created in commit: false state. Scopes: wallet:withdrawals:create

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| accountId   | String| Account identifier.
| withdrawalId| String| Withdrawal identifier.

## Coinbase.getPaymentMethods
Lists current user’s payment methods. Scopes: wallet:payment-methods:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.getSinglePaymentMethod
Show current user’s payment method. Scopes: wallet:payment-methods:read

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| Access token.
| paymentMethodId| String| Payment method identifier.

## Coinbase.getSingleMerchant
Get any merchant’s information with their ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| merchantId | String| Merchant identifier.

## Coinbase.getOrders
Lists the current user’s (merchant) orders. Scopes: wallet:orders:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.getSingleOrder
Show current merchant order. Scopes: wallet:orders:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| orderId    | String| Order identifier.

## Coinbase.createOrder
Creates a new merchant order. Scopes: wallet:orders:create

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| Access token.
| amount          | String| Order amount (price).
| currency        | String| Order amount’s currency.
| name            | String| Name of the order.
| description     | String| More detailed description of the order.
| notificationsUrl| String| Order specific notification URL.
| metadata        | JSON  | JSON Object. Developer defined key value pairs.

## Coinbase.refundOrder
Refunds an order. Scopes: wallet:orders:refund

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token.
| orderId      | String| Order identifier.
| currency     | String| The currency to issue the refund in.
| refundAddress| String| Must be a valid bitcoin address.

## Coinbase.getCheckouts
Lists current user’s checkouts. Scopes: wallet:checkouts:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.getSingleCheckout
Show current user’s checkout. Scopes: wallet:checkouts:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| checkoutId | String| Checkout identifier.

## Coinbase.createCheckout
Creates a new merchant order checkout product. Scopes: wallet:checkouts:create

| Field                 | Type   | Description
|-----------------------|--------|----------
| accessToken           | String | Access token.
| amount                | String | Order amount (price).
| currency              | String | Order amount’s currency.
| name                  | String | Name of the order.
| description           | String | More detailed description of the checkout order.
| type                  | String | Checkout’s order type.
| style                 | Select | Style of a payment button. One of: buy_now_large, buy_now_small, donation_large, donation_small ,custom_large, custom_small.
| customerDefinedAmount | Boolean| Allow customer to define the amount they are paying.
| amountPresets         | List  | Array of Strings, allow customer to select one of the predefined amount values.
| successUrl            | String | URL to which the customer is redirected after successful payment.
| cancelUrl             | String | URL to which the customer is redirected after they have canceled a payment.
| notificationsUrl      | String | Checkout specific notification URL.
| autoRedirect          | Boolean| Auto-redirect users to success or cancel url after payment.
| collectShippingAddress| Boolean| Collect shipping address from customer.
| collectEmail          | Boolean| Collect email address from customer.
| collectPhoneNumber    | Boolean| Collect phone number from customer.
| collectCountry        | Boolean| Collect country from customer.
| metadata              | JSON   | JSON Object. Developer defined key value pairs.

## Coinbase.getCheckoutOrders
Lists checkout product’s orders. Scopes: wallet:checkouts:read

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| checkoutId | String| Checkout identifier.

## Coinbase.createCheckoutOrder
Creates a new order for a checkout. Scopes: wallet:checkouts:create

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| checkoutId | String| Checkout identifier.

## Coinbase.getCurrencies
List known currencies.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Coinbase.getExchangeRates
Get current exchange rates.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| currency   | String| Base currency (default: USD).

## Coinbase.getBuyPrice
Get the total price to buy one bitcoin or ether.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| currencyPair| String| Currency pair. Example BTC-USD.

## Coinbase.getSellPrice
Get the total price to sell one bitcoin or ether.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| currencyPair| String| Currency pair. Example BTC-USD.

## Coinbase.getSpotPrice
Get the current market price for bitcoin.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| currencyPair| String| Currency pair. Example BTC-USD.
| date        | DatePicker| Specify date for historic spot price in format YYYY-MM-DD (UTC).

## Coinbase.getCurrentTime
Get the API server time.

No arguments.

## Coinbase.nextPage
Retrieve next page for paginated blocks.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| nextUri    | String| Next page Uri, from pagination object in response.


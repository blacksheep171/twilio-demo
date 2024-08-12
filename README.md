# Twilio SMS Service

This is an app you can run to test your changes quickly.

## Requirements

Register new account on [Twilio original](https://www.twilio.com/en-us).

## Setup your account

Recieve ```Account SID``` and ```Auth Token``` information from Twilio and use them to integrate with APIs.

### Example with curl request

```
curl 'https://api.twilio.com/2010-04-01/Accounts/AC468bfe18b9e45cd29950afde4b0e2cbb/Messages.json' -X POST \
--data-urlencode 'To=+18777804236' \
-u AC468bfe18b9e45cd29950afde4b0e2cbb:[AuthToken]
```

We have output

```
Response will appear here after you make request
```

### Monitoring

Manage your account number and monitoring via [Twilio Console](https://console.twilio.com/).
We can manage your phone number and see all log errors in console.

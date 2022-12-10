import os
from twilio.rest import Client


# Find your Account SID and Auth Token at twilio.com/console
# and set the environment variables. See http://twil.io/secure
account_sid = 'AC88455ae15ef68ccb9c6269800700191c'
auth_token = '8914f7ae04e44b544dbb52fd9cfcc35d'
client = Client(account_sid, auth_token)

call = client.calls.create(
                        twiml='<Response><Say>Ahoy, World!</Say></Response>',
                        to='+37061537788',
                        from_='+16506401992'
                    )

print(call.sid)

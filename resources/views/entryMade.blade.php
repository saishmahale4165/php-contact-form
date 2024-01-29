<!DOCTYPE html>
<html>
    <head>
        <title>New Entry Made</title>
    </head>
    <body>
        <p>Hello,</p>
        <p>A new entry has been made with the following details:</p>
        <ul>
            <li>Name: {{ $newMessage['name'] }}</li>
            <li>Email: {{ $newMessage['email'] }}</li>
            <li>Phone: {{ $newMessage['phone'] }}</li>
            <li>Message: {{ $newMessage['message'] }}</li>
        </ul>
        <p>Thank you!</p>
    </body>
</html>

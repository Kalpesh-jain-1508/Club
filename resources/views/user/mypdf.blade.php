<!DOCTYPE html>
<html>

<head>
    <title>Booking Details </title>
</head>

<body>
    <h1><b>THE CLUBIES</b></h1>
    <hr>
    <h3>Hello, {{ session()->get('membername') }}</h3>
    <p>Thank You for Choosing The Clubies. We look forward to hosting your stay.</p>
    <br>
    <p>This is confirmation for your reservation at The Clubies for the dates of {{ session()->get('bkcheckin') }} to
        {{ session()->get('bkcheckout') }}. We’ve received your Total payment of
        {{ session()->get('bktotalcharges') }}/- .</p>
    <br>
    <p>Here are your full booking details.</p>
    <ul>
        <ol>
            Roomtype : {{ session()->get('bktype') }}
        </ol>
        <ol>
            Checkin : {{ session()->get('bkcheckin') }}
        </ol>
        <ol>
            Checkout : {{ session()->get('bkcheckout') }}
        </ol>
        <ol>
            Extra Facilities : {{ session()->get('bkextrafacility') }}
        </ol>
        <ol>
            Total Charges : {{ session()->get('bktotalcharges') }}/-
        </ol>
    </ul>
    <br>
    <p>If you need to make any changes or have any questions please contact us on theclubies@gmail.com or +91 7096034320
    </p>
    <p><b>Now,Let the vacation countdown begin.</b></p>
    <br>
    <p>Organization Authorities, </p>
    <b>
        <p>The Clubies</p>
    </b>
</body>

</html>

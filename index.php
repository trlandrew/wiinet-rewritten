<head>
	<link rel="stylesheet" href="css/home.css"/>
	<script type="text/javascript">
        if (!navigator.userAgent.match(/Wii/) && window.location.hash !=='#override') {
            window.location = 'https://landing.wiinet.xyz';
        }
    </script>
</head>
<body style="text-align:center;">
    <div style="padding-top:220px;">
        <a href="/games">GAMES</a> - <a href="/videos">VIDEOS</a> - <a href="/media">MEDIA</a> - <a href="/utilities">UTILITIES</a> - <a href="/others">OTHERS</a> - <a href="/credits">CREDITS</a><br>
    </div><br>

	<div style="background-color:#000;">
		<marquee style="color:yellow;">There is a new progress update video on the official WiiNet channel (both on YouTube and WiiNet Videos)!</marquee>
	</div><br>
    <span id="tick2" style="font-size:24px;"></span>

    <script type="text/javascript">
        function show2() {
            if (!document.all&&!document.getElementById)
                return
            thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
           var Digital=new Date()
            var hours=Digital.getHours()
            var minutes=Digital.getMinutes()
            var seconds=Digital.getSeconds()
            var dn="PM"
            if (hours<12)
            dn="AM"
            if (hours>12)
            hours=hours-12
            if (hours==0)
            hours=12
            if (minutes<=9)
            minutes="0"+minutes
            if (seconds<=9)
            seconds="0"+seconds
            var ctime=hours+":"+minutes+":"+seconds+" "+dn
            thelement.innerHTML=""+ctime+""
            setTimeout("show2()",1000)
        }
        window.onload=show2;
        </script>

</body>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>hotel room reservation system</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <h1>Enjoy Your Dream Vacation</h1>
                <p>Book Hotel and stay packages at lowest price.</p>

    footer section start 

     <section class="footer">
        <h2>Featured Rooms</h2>
        <div class="room">
            <img src="1.jfif" alt="Room 1">
            <h3>Single Room</h3>
            <p>Perfect for solo travelers</p>
            <a href="#">Book Now</a>
        </div>
        <div class="room">
            <img src="3.jfif" alt="Room 2">
            <h3>Double Room</h3>
            <p>Great for couples or friends</p>
            <a href="#">Book Now</a>
        </div>
        <div class="room">
            <img src="2.jfif" alt="Room 3">
            <h3>Suite</h3>
            <p>Luxurious accommodations</p>
            <a href="#">Book Now</a>
        </div>
    </section>
    <script>
        var menulist = document.getElementById("menulist");
        menulist.style.maxHeight = "0px";
        function menutoggle() {
            if (menulist.style.maxHeight == "0px") {
                menulist.style.maxHeight = "100vh";
            }
            else {
                menulist.style.maxHeight = "0px";
            }
        }
    </script>
    <section class="home">
        <div class="content">

        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
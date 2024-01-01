<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Barangay Sto. Tomas</title>
    <link rel="stylesheet" type="text/css" href="css/kabarangay.css">
   </head>
     <body>
        <div class="menuToggle"></div>
        <div class="sidebar">
            <ul>
                <li class="logo" style="--bg: #333;">
                  <a href="#">
                    <div class="imgBoox">
                            <img src="img/logo.png">   
                    </div>
                    <div class="text">Sto. Tomas RBI</div>
                  </a>
                </li>
                <div class="Menulist">
                    <li style="--bg: #ffa117;">
                        <a href="/dash/dashboard.html">
                            <div class="icon"><ion-icon name="grid"></ion-icon></div>
                            <div class="text">DASHBOARD</div>
                         </a>
                    </li>
                    <li style="--bg: #f44336;">
                        <a href="../HHTable.html">
                            <div class="icon"><ion-icon name="home"></ion-icon></div>
                            <div class="text">HOUSEHOLD</div>
                         </a>
                    </li>
                    <li style="--bg: #0fc70f;" class = "active">
                        <a href="../kabarangay.html">
                            <div class="icon"><ion-icon name="people"></ion-icon></div>
                            <div class="text">KA-BARANGAY</div>
                         </a>
                    </li>
                    <li style="--bg: #2196f3;">
                        <a href="../blotter.html">
                            <div class="icon"><ion-icon name="newspaper"></ion-icon></div>
                            <div class="text">BLOTTER</div>
                         </a>
                    </li>
                    <li style="--bg: #e9d045;">
                        <a href="#">
                            <div class="icon"><ion-icon name="business"></ion-icon></div>
                            <div class="text">ESTABLISHMENT</div>
                         </a>
                    </li>
                    <li style="--bg: #e91e63;">
                        <a href="#">
                            <div class="icon"><ion-icon name="fitness"></ion-icon></div>
                            <div class="text">COVID-19</div>
                         </a>
                    </li>
                    <li style="--bg: rgb(30, 233, 182);">
                        <a href="#">
                            <div class="icon"><ion-icon name="receipt"></ion-icon></div>
                            <div class="text">CERTIFICATE</div>
                         </a>
                    </li>
                </div>
                <div class="bottom">
                    <li style="--bg: #333;">
                        <a href="#">
                            <div class="icon">
                            <div class="imgBx">
                                <img src="img/376522276_1023314158721897_2179476028798761998_n.jpg">
                            </div>
                            </div>
                            <div class="text">Bimby Ledda</div>
                         </a>
                    </li>
                    <li style="--bg: #333;">
                        <a href="#">
                            <div class="icon"><ion-icon name="log-out"></ion-icon></div>
                            <div class="text">Logout</div>
                         </a>
                    </li>
                </div>
            </ul>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
        let menuToggle = document.querySelector('.menuToggle');
        let sidebar = document.querySelector('.sidebar');
        menuToggle.onclick = function () {
            menuToggle.classList.toggle('active');
            sidebar.classList.toggle('active');
        }
        let Menulist = document.querySelectorAll('.Menulist li');
        function activeLink() {
            Menulist.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active')
        }
        Menulist.forEach((item) =>
            item.addEventListener('click', activeLink));
    </script>
    </body>
</html>
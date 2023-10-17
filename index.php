<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">

    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1202/1202125.png" type="image/jpeg" sizes="16x16">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Domeytoe</title>
</head>

<body>
    <script type="text/babel">

        function Domeytoe(){
            return(
                <div class="card my-4 text-white" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none',display: 'flex', justifyContent: 'center', alignItems: 'center', width: '18rem'}}>
                    <img src="https://images3.alphacoders.com/749/749833.jpg" class="card-img-top" alt="..."/>
                    <div class="card-body" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none' }}>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
                            <input type="text" class="form-control" placeholder="Answer" aria-label="Answer" aria-describedby="basic-addon1"/>
                        </div>
                        <button type="button" class="btn btn-danger"><i class="bi bi-arrow-return-right"></i></button>
                    </div>
                </div>
            );
        }


            function HomePage(){
                return(
                    <div>
                        <div className="container my-4 text-center">
                            <div className="row gx-3 text-center justify-content-center">
                                <div className="col-sm-4 col-md-4 col-lg-6 rounded-4" id="box1">
                                    <div className="card my-4 text-white" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none',display: 'flex', justifyContent: 'center', alignItems: 'center'}}>
                                        <Domeytoe/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                );
            }
            function HomePageCall(){
                ReactDOM.render(<HomePage/> , document.getElementById("AppHere"));
                return null;
            }
            
            ReactDOM.render(<HomePageCall/> , document.getElementById("AppHere"));

        function Hearts(HeartsProps){
            if(HeartsProps.Fill==true){
                return(
                    <i class="bi bi-suit-heart-fill"> </i>
                );
            }
            else{
                return(
                    <i class="bi bi-suit-heart"> </i>
                );
            }
        }
        
        function Player(){
            let H1 = true;
            let H2 = true;
            let H3 = false;
            return(
            <div className="container-fluids" >
                <nav className="navbar navbar-expand-md navbar-dark rounded-4" style={{ background: 'rgba(10, 0, 0, 0)', cursor:'default',position: 'absolute', top: '100px', left: '100px'}}  id="box1">
                    &nbsp;&nbsp;&nbsp;
                    <p className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(117, 0, 0, 0.9)' }}><i class="bi bi-person-fill"></i></p>
                    &nbsp;&nbsp;&nbsp;
                    <p className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(117, 0, 0, 0.9)' }}>Username</p>
                    &nbsp;&nbsp;&nbsp;
                    <p className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(117, 0, 0, 0.9)' }}>
                        <Hearts Fill={H1}/>
                        <Hearts Fill={H2}/>
                        <Hearts Fill={H3}/>
                    </p>
                </nav>
            </div>
            );
        }
        ReactDOM.render(<Player /> , document.getElementById("PlayerHere"));

        function Timer(){
            let H1 = true;
            let H2 = true;
            let H3 = false;
            return(
            <div className="container-fluids" >
                <nav className="navbar navbar-expand-md navbar-dark rounded-4" style={{ background: 'rgba(10, 0, 0, 0)', cursor:'default',position: 'absolute', top: '100px', left: '1150px'}}  id="box1">
                    &nbsp;&nbsp;&nbsp;
                    <p className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(117, 0, 0, 0.9)' }}><i class="bi bi-hourglass-split"></i></p>
                    &nbsp;&nbsp;&nbsp;
                    <p className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(117, 0, 0, 0.9)' }}>Timer</p>
                    &nbsp;&nbsp;&nbsp;
                    <p className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(117, 0, 0, 0.9)' }}>
                        <i class="bi bi-5-square"></i>
                        &nbsp;
                        <i class="bi bi-9-square"></i>
                    </p>
                </nav>
            </div>
            );
        }
        ReactDOM.render(<Timer /> , document.getElementById("TimerHere"));

        function Header(){
            return(
            <div className="container-fluids">
                <nav className="navbar navbar-expand-md navbar-dark fixed-top" style={{ background: 'rgba(10, 0, 0, 0)', cursor:'default' }}>
                    &nbsp;&nbsp;&nbsp;
                    <a href="index.php" style={{cursor:'default'}}><img src="https://cdn-icons-png.flaticon.com/512/1202/1202125.png" id="AaroophanIMG" height="35px" width="35px" className="rounded-5" /></a>
                    &nbsp;&nbsp;&nbsp;
                    <a className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(117, 0, 0, 0.9)' }}>Domeytoe</a>
                    &nbsp;&nbsp;&nbsp;
                </nav>
            </div>
            );
        }
        ReactDOM.render(<Header /> , document.getElementById("HeaderHere"));

        function Footer(){
            return(
                <footer className="footer text-light py-1 bottom" style={{ background: 'linear-gradient(to bottom, transparent 0%, #111111 100%)' }}>
                    <div className="container">
                        <hr />
                        <div className="text-center">
                            <a href="http://aaroophan-com.stackstaging.com" style={{ cursor:'default', color:'rgba(250, 210, 210, 0.9)', textDecoration:'none' }}>&copy; 2023 Aaroophan | 2323492</a>
                            <ul className="list-inline">
                                <li className="list-inline-item"><a href="https://www.instagram.com/aaroophan/?theme=dark" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-instagram"></i></a></li>
                                <li className="list-inline-item"><a href="https://twitter.com/Aaroophan" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-twitter"></i></a></li>
                                <li className="list-inline-item"><a href="https://www.linkedin.com/in/aaroophan" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-linkedin"></i></a></li>
                                <li className="list-inline-item"><a href="https://github.com/R-U-Fun" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            );
        }
        ReactDOM.render(<Footer /> , document.getElementById("FooterHere"));
    </script>
    <style>
        body {
            background: linear-gradient(to top, #750000 0%, #ffeded 100%);
            font-family: 'Segoe', 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';
        }

        nav,
        footer {
            font-family: 'Segoe', 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'
        }

        #HomeName {
            width: 100%;
            margin: auto;
            padding: 10px 0;
            text-align: center;
            font-size: 50px;
            font-family: 'Lato', sans-serif;
            letter-spacing: 2px;
        }

        #HomeName a {
            color: #750000;
            text-decoration: none;
            position: relative;
            cursor: default;
            transition: font-size 1s, letter-spacing 1s;
        }

        #HomeName a:hover {
            font-size: 75px;
            letter-spacing: 20px;
        }

        #box1 {
            box-shadow: 1px 1px 15px 10px #750000;
            /* transition: box-shadow .2s; */
        }

        #PageNameA {
            font-family: 'Lato', sans-serif;
            text-decoration: none;
            transition: color 1s, font-size 1s;
        }

        #PageNameA:hover {
            color: #ea9999;
            cursor: default;
            font-size: 23px;
        }
    </style>


    <div id="HeaderHere" class="container"></div>
    <br><br><br>
    <div id="PlayerHere" class="container"></div>
    <div id="TimerHere" class="container"></div>

    <div class="p-4" id="AppHere">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <br><br>

    <div id="FooterHere"></div>

</body>

</html>
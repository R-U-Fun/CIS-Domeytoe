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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1202/1202125.png" type="image/jpeg" sizes="16x16">
    <title>Domeytoe</title>
</head>

<body>
    <script type="text/babel">

        function StartGame(){
            return(
                <div class="card text-white" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none',display: 'flex', justifyContent: 'center', alignItems: 'center'}}>
                    <a className="btn btn-danger m-4 fs-2 fw-bold">Game</a>
                    <img src="https://images3.alphacoders.com/749/749833.jpg" class="card-img-top" alt="..." style={{objectFit: 'cover'}}/>
                    <div class="card-body" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none' }}>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
                            <input type="text" class="form-control" placeholder="Answer" aria-label="Answer" aria-describedby="basic-addon1"/>
                            &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger"><i class="bi bi-arrow-return-right"></i></button>
                        </div>
                    </div>
                </div>
            );
        }
        function Level(){
            return(
                <div>
                    <a className="btn btn-danger m-4 fs-2 fw-bold">Levels</a>
                    <br/><br/><br/><br/><br/><br/>
                    <button className="btn btn-danger btn-lg m-4 fw-bold" onClick={function Call(){ReactDOM.render(<StartGame/>, document.getElementById("Box"))}}>Easy</button>
                    <button className="btn btn-danger btn-lg m-4 fw-bold" onClick={function Call(){ReactDOM.render(<StartGame/>, document.getElementById("Box"))}}>Medium</button>
                    <button className="btn btn-danger btn-lg m-4 fw-bold" onClick={function Call(){ReactDOM.render(<StartGame/>, document.getElementById("Box"))}}>Hard</button>
                    <br/><br/><br/><br/><br/><br/><br/>
                </div>
            );
        }

        function UsersOfLeaderboard(props){
            return(
                <tr>
                    <th><a className="btn btn-danger m-1 fw-bold"><i className={`bi bi-${props.Rank}-square-fill`}></i></a></th>
                    <td><a className="btn btn-danger m-1 fw-bold">{props.Username}</a></td>
                    <td>
                        <a className="btn btn-danger m-1 fw-bold">
                            <i className={`bi bi-${props.Best1}-square-fill`}></i>
                            &nbsp;
                            <i className={`bi bi-${props.Best2}-square-fill`}></i>
                        </a>
                    </td>
                </tr>
            );
        }

        function Leaderboard(props){
            return(
                <div>
                    <a className="btn btn-danger m-4 fs-2 fw-bold">Leaderboard</a>
                    <table className="text-start">
                        <tbody>
                            <UsersOfLeaderboard Rank={1} Username="Userdfdfdfname1" Best1={1} Best2={1} />
                            <UsersOfLeaderboard Rank={2} Username="Username2" Best1={2} Best2={1} />
                            <UsersOfLeaderboard Rank={3} Username="Username3" Best1={3} Best2={2} />
                            <UsersOfLeaderboard Rank={4} Username="Username4" Best1={4} Best2={3} />
                            <UsersOfLeaderboard Rank={5} Username="Username4" Best1={5} Best2={4} />
                            <UsersOfLeaderboard Rank={6} Username="Username4" Best1={6} Best2={5} />
                            <UsersOfLeaderboard Rank={7} Username="Username4" Best1={7} Best2={6} />
                            <UsersOfLeaderboard Rank={8} Username="Username4" Best1={8} Best2={7} />
                            <UsersOfLeaderboard Rank={9} Username="Username4" Best1={9} Best2={8} />
                        </tbody>
                    </table>
                </div>
            );
        }

        function UserProfile(props){
            return(
                <div>
                <a className="btn btn-danger m-4 fs-2 fw-bold">Profile</a>
                <table className="text-start">
                    <tbody>
                        <tr>
                            <th><a className="btn btn-danger m-2 fw-bold">Username</a></th>
                            <td><a className="btn btn-danger m-2 fw-bold">{props.Username}</a></td>
                        </tr>
                        <tr>
                            <th><a className="btn btn-danger m-2 fw-bold">Best Time</a></th>
                            <td><a className="btn btn-danger m-2 fw-bold">{props.Best1} {props.Best2}</a></td>
                        </tr>
                        <tr>
                            <th><a className="btn btn-danger m-2 fw-bold">Games Played</a></th>
                            <td><a className="btn btn-danger m-2 fw-bold">{props.Played}</a></td>
                        </tr>
                        <tr>
                            <th><a className="btn btn-danger m-2 fw-bold">Games Won</a></th>
                            <td><a className="btn btn-danger m-2 fw-bold">{props.Won}</a></td>
                        </tr>
                    </tbody>
                </table>
                <br/>
                </div>
            );
        }
              
        function HomePage(){
            return(
                <div>
                    <div className="container text-center">
                        <div className="row gx-3 text-center justify-content-center">
                            <div className="col-sm-4 col-md-4 col-lg-6 rounded-4 border border-danger border-5">
                                <div className="card my-4 text-white" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none',display: 'flex', justifyContent: 'center', alignItems: 'center'}} id="Box">
                                    <a className="btn btn-danger m-4 fs-2 fw-bold">Domeytoe</a>
                                    <button className="btn btn-danger btn-lg m-4 fw-bold" onClick={function Call(){ReactDOM.render(<StartGame/>, document.getElementById("Box"))}}>Start Game</button>
                                    <button className="btn btn-danger btn-lg m-4 fw-bold" onClick={function Call(){ReactDOM.render(<Level/>, document.getElementById("Box"))}}>Levels</button>
                                    <button className="btn btn-danger btn-lg m-4 fw-bold" onClick={function Call(){ReactDOM.render(<Leaderboard />, document.getElementById("Box"))}}>Leaderboard</button>
                                    <button className="btn btn-danger btn-lg m-4 fw-bold" onClick={function Call(){ReactDOM.render(<UserProfile Username="Aaroophan" Best1={1} Best2={2} Played={10} Won={8} />, document.getElementById("Box"))}}>Profile</button>
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
            <div className="container-fluids">
                <a className="btn btn-danger btn-lg" style={{ position: 'absolute', top: '100px', left: '100px'}} onClick={function Call(){ReactDOM.render(<UserProfile Username="Aaroophan" Best1={1} Best2={2} Played={10} Won={8} />, document.getElementById("Box"))}}>
                    &nbsp;&nbsp;&nbsp;
                    <p className="fw-bold"><i class="bi bi-person-fill"></i></p>
                    <p className="fw-bold">Username</p>
                    <p className="fw-bold">
                        <Hearts Fill={H1}/>
                        <Hearts Fill={H2}/>
                        <Hearts Fill={H3}/>
                    </p>
                </a>
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
                <a className="btn btn-danger btn-lg" style={{ position: 'absolute', top: '100px', left: '1200px'}} onClick={function Call(){ReactDOM.render(<UserProfile Username="Aaroophan" Best1={1} Best2={2} Played={10} Won={8} />, document.getElementById("Box"))}}>
                    &nbsp;&nbsp;&nbsp;
                    <p className="fw-bold">
                        <i class="bi bi-4-square"></i>
                        &nbsp;
                        <i class="bi bi-9-square"></i>
                    </p>
                    <p className="fw-bold"><i class="bi bi-hourglass-split"></i></p>
                    <p className="fw-bold">
                        <i class="bi bi-1-square"></i>
                        &nbsp;
                        <i class="bi bi-1-square"></i>
                    </p>
                </a>
            </div>
            );
        }
        ReactDOM.render(<Timer /> , document.getElementById("TimerHere"));

        function Elapsed(){
            let H1 = true;
            let H2 = true;
            let H3 = false;
            return(
            <div className="container-fluids" >
                <a className="btn btn-danger btn-lg" style={{ position: 'absolute', top: '400px', left: '1200px'}}>
                    &nbsp;&nbsp;&nbsp;
                    <p className="fw-bold"><i class="bi bi-hourglass-split"></i></p>
                    <p className="fw-bold">Elapsed</p>
                    <p className="fw-bold">
                        <i class="bi bi-1-square"></i>
                        &nbsp;
                        <i class="bi bi-1-square"></i>
                    </p>
                </a>
            </div>
            );
        }
        //ReactDOM.render(<Elapsed /> , document.getElementById("ElapsedHere"));

        function Header(){
            return(
            <div className="container-fluids">
                <nav className="navbar navbar-expand-md navbar-dark fixed-top" style={{ background: 'rgba(10, 0, 0, 0)', cursor:'default' }} onClick={function Call(){ReactDOM.render(<HomePageCall/>, document.getElementById("AppHere"))}}>
                    &nbsp;&nbsp;&nbsp;
                    <a style={{cursor:'default'}}><img src="https://cdn-icons-png.flaticon.com/512/1202/1202125.png" id="AaroophanIMG" height="35px" width="35px" className="rounded-5" /></a>
                    &nbsp;&nbsp;&nbsp;
                    <a className="navbar-brand fs-2 fw-bold font-arial" id="PageNameA" style={{ cursor:'default', color:'rgba(117, 0, 0, 0.9)' }}>Domeytoe</a>
                </nav>
            </div>
            );
        }
        ReactDOM.render(<Header /> , document.getElementById("HeaderHere"));

        function Footer(){
            return(
                <footer className="footer text-light py-1 bottom" style={{ background: 'linear-gradient(to bottom, transparent 0%, #111111 100%)' }}>
                    <div className="container">
                        <br/><hr />
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
            /* background: linear-gradient(to top, #750000 0%, #ffeded 100%); */
            background: url("Tomato-BG-01.jpeg");
            font-family: 'Segoe', 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';
        }

        nav,
        footer {
            font-family: 'Segoe', 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'
        }
    </style>


    <div id="HeaderHere" class="container"></div>
    <br><br><br>
    <div id="PlayerHere" class="container"></div>
    <div id="TimerHere" class="container"></div>
    <div id="ElapsedHere" class="container"></div>

    <div class="p-4" id="AppHere">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <br><br>

    <div id="FooterHere"></div>

</body>

</html>
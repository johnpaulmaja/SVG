<html>
    <head>
        <title>SVG</title> 
    </head>

    <body">
        <!-- <svg width="200" height="300" style="border:1px solid black; background-color: #444444;">
            <path d="M 40 150 A 50 50 0 1 1 160 150 Z" fill="#d28c4e" />
            <path d="M 45 160 L 155 160 Z" stroke="#cf734b" stroke-width="2" />
            <path d="M 50 170 L 150 170 Z" stroke="#d1584b" stroke-width="2" />
            <path d="M 60 180 L 140 180 Z" stroke="#d05749" stroke-width="2" />
            <path d="M 70 190 L 130 190 Z" stroke="#cf4a5a" stroke-width="2" />
            <path d="M 80 200 L 120 200 Z" stroke="#cc4d65" stroke-width="2" />
        </svg> -->
        <wrapper style="display: grid; grid-template-columns:auto auto auto; grid-row-gap: 50px;  text-align: center; ">
            <div>
                <svg width="200" height="300" style="border:1px solid black; background-color: #444444;">
                    <line x1="100" y1="0" x2="200" y2="100" stroke="#d28c4e" stroke-width="4" />
                    <line x1="0" y1="0" x2="200" y2="200" stroke="#d28c4e" stroke-width="4" />
                    <line x1="-100" y1="0" x2="200" y2="300" stroke="#d28c4e" stroke-width="4" />
                    <line x1="-200" y1="0" x2="200" y2="400" stroke="#d28c4e" stroke-width="4" />

                    <line x1="0" y1="100" x2="100" y2="0" stroke="#d28c4e" stroke-width="4" />
                    <line x1="0" y1="200" x2="200" y2="0" stroke="#d28c4e" stroke-width="4" />
                    <line x1="0" y1="300" x2="300" y2="0" stroke="#d28c4e" stroke-width="4" />
                    <line x1="0" y1="400" x2="400" y2="0" stroke="#d28c4e" stroke-width="4" />
                    
                    <circle cx="0" cy="0" r="30"  fill="#d28c4e" />
                    <circle cx="100" cy="0" r="30"  fill="#d28c4e" />
                    <circle cx="200" cy="0" r="30"  fill="#d28c4e" />

                    <circle cx="50" cy="50" r="30"  fill="#d28c4e" />
                    <circle cx="150" cy="50" r="30"  fill="#d28c4e" />

                    <circle cx="0" cy="100" r="30"  fill="#d28c4e" />
                    <circle cx="100" cy="100" r="30"  fill="#d28c4e" />
                    <circle cx="200" cy="100" r="30"  fill="#d28c4e" />

                    <circle cx="50" cy="150" r="30"  fill="#d28c4e" />
                    <circle cx="150" cy="150" r="30"  fill="#d28c4e" />

                    <circle cx="0" cy="200" r="30"  fill="#d28c4e" />
                    <circle cx="100" cy="200" r="30"  fill="#d28c4e" />
                    <circle cx="200" cy="200" r="30"  fill="#d28c4e" />
                    
                    <circle cx="50" cy="250" r="30"  fill="#d28c4e" />
                    <circle cx="150" cy="250" r="30"  fill="#d28c4e" />

                    <circle cx="0" cy="300" r="30"  fill="#d28c4e" />
                    <circle cx="100" cy="300" r="30"  fill="#d28c4e" />
                    <circle cx="200" cy="300" r="30"  fill="#d28c4e" />
                </svg><br>
                <span>Circles and lines</span>
            </div>
            
            <div>
                <svg width="200" height="300" style="border:1px solid black; background-color: #444444;">
                    <rect x="10" y="10" width="50" height="90" fill="#d28c4e" />
                    <rect x="75" y="10" width="50" height="90" fill="#d28c4e" />
                    <rect x="140" y="10" width="50" height="90" fill="#d28c4e" />
                    <circle cx="35" cy="30" r="15"  fill="#444444" />
                    <circle cx="35" cy="80" r="15"  fill="#444444" />
                    <circle cx="100" cy="30" r="15"  fill="#444444" />
                    <circle cx="100" cy="80" r="15"  fill="#444444" />
                    <circle cx="165" cy="30" r="15"  fill="#444444" />
                    <circle cx="165" cy="80" r="15"  fill="#444444" />

                    <rect x="-30" y="105" width="50" height="90" fill="#d28c4e" />
                    <rect x="40" y="105" width="50" height="90" fill="#d28c4e" />
                    <rect x="110" y="105" width="50" height="90" fill="#d28c4e" />
                    <rect x="180" y="105" width="50" height="90" fill="#d28c4e" />
                    <circle cx="-5" cy="125" r="15"  fill="#444444" />
                    <circle cx="-5" cy="175" r="15"  fill="#444444" />
                    <circle cx="65" cy="125" r="15"  fill="#444444" />
                    <circle cx="65" cy="175" r="15"  fill="#444444" />
                    <circle cx="135" cy="125" r="15"  fill="#444444" />
                    <circle cx="135" cy="175" r="15"  fill="#444444" />
                    <circle cx="205" cy="125" r="15"  fill="#444444" />
                    <circle cx="205" cy="175" r="15"  fill="#444444" />

                    <rect x="10" y="200" width="50" height="90" fill="#d28c4e" />
                    <rect x="75" y="200" width="50" height="90" fill="#d28c4e" />
                    <rect x="140" y="200" width="50" height="90" fill="#d28c4e" />
                    <circle cx="35" cy="220" r="15"  fill="#444444" />
                    <circle cx="35" cy="270" r="15"  fill="#444444" />
                    <circle cx="100" cy="220" r="15"  fill="#444444" />
                    <circle cx="100" cy="270" r="15"  fill="#444444" />
                    <circle cx="165" cy="220" r="15"  fill="#444444" />
                    <circle cx="165" cy="270" r="15"  fill="#444444" />
                </svg><br>
                <span>Rectangles and Circles</span>
            </div>

            <div>
                <svg width="200" height="300" style="border:1px solid black; background-color: #444444;">
                    <polyline points="10,-10 -20,50 10,100 -20,150 10,200 -20,250 10,310" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="40,-10 10,50 40,100 10,150 40,200 10,250 40,310" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="70,-10 40,50 70,100 40,150 70,200 40,250 70,310" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="100,-10 70,50 100,100 70,150 100,200 70,250 100,310" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="130,-10 100,50 130,100 100,150 130,200 100,250 130,310" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="160,-10 130,50 160,100 130,150 160,200 130,250 160,310" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="190,-10 160,50 190,100 160,150 190,200 160,250 190,310" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="220,-10 190,50 220,100 190,150 220,200 190,250 220,310" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <circle cx="0" cy="50" r="10"  fill="#444444" />
                    <circle cx="0" cy="150" r="10"  fill="#444444" />
                    <circle cx="0" cy="250" r="10"  fill="#444444" />

                    <circle cx="50" cy="200" r="10"  fill="#444444" />
                    <circle cx="50" cy="100" r="10"  fill="#444444" />

                    <circle cx="60" cy="50" r="10"  fill="#444444" />
                    <circle cx="60" cy="150" r="10"  fill="#444444" />
                    <circle cx="60" cy="250" r="10"  fill="#444444" />

                    <circle cx="110" cy="200" r="10"  fill="#444444" />
                    <circle cx="110" cy="100" r="10"  fill="#444444" />

                    <circle cx="120" cy="50" r="10"  fill="#444444" />
                    <circle cx="120" cy="150" r="10"  fill="#444444" />
                    <circle cx="120" cy="250" r="10"  fill="#444444" />

                    <circle cx="170" cy="200" r="10"  fill="#444444" />
                    <circle cx="170" cy="100" r="10"  fill="#444444" />

                    <circle cx="180" cy="50" r="10"  fill="#444444" />
                    <circle cx="180" cy="150" r="10"  fill="#444444" />
                    <circle cx="180" cy="250" r="10"  fill="#444444" />
                </svg><br>
                <span>Polyline and Circles</span>
            </div>

            <div>
                <svg width="200" height="300" style="border:1px solid black; background-color: #444444;">
                    <polygon points="100,0 0,300 200,300" fill="#d28c4e" />
                    <ellipse cx="0" cy="150" rx="25" ry="50" fill="#d28c4e" />
                    <ellipse cx="100" cy="150" rx="25" ry="50" fill="#444444" />
                    <ellipse cx="200" cy="150" rx="25" ry="50" fill="#d28c4e" />
                </svg><br>
                <span>Polygon and Ellipse</span>
            </div>

            <div>
            <svg width="200" height="300" style="border:1px solid black; background-color: #444444;">
                <line x1="0" y1="50" x2="200" y2="50" stroke="#d28c4e" stroke-width="4"/>
                <line x1="0" y1="100" x2="200" y2="100" stroke="#d28c4e" stroke-width="4"/>
                <line x1="0" y1="150" x2="200" y2="150" stroke="#d28c4e" stroke-width="4"/>
                <line x1="0" y1="200" x2="200" y2="200" stroke="#d28c4e" stroke-width="4"/>
                <line x1="0" y1="250" x2="200" y2="250" stroke="#d28c4e" stroke-width="4"/>

                <line x1="100" y1="0" x2="100" y2="300" stroke="#d28c4e" stroke-width="4"/>

                <circle cx="100" cy="50" r="10"  fill="#d28c4e" />
                <circle cx="100" cy="100" r="10"  fill="#d28c4e" />
                <circle cx="100" cy="150" r="10"  fill="#d28c4e" />
                <circle cx="100" cy="200" r="10"  fill="#d28c4e" />
                <circle cx="100" cy="250" r="10"  fill="#d28c4e" />

                <rect x="130" y="0" width="50" height="300" fill="#d28c4e" />
                <rect x="20" y="0" width="50" height="300" fill="#d28c4e" />
            </svg><br>
            <span>Circle, Line and Rectangle</span>
            </div>

            <div>
                <svg width="200" height="300" style="border:1px solid black; background-color: #444444;">
                    <polyline points="0,0 50,50 100,0 150,50 200,0" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="0,100 50,50 100,100 150,50 200,100" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="0,100 50,150 100,100 150,150 200,100" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="0,200 50,150 100,200 150,150 200,200" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="0,200 50,250 100,200 150,250 200,200" stroke="#d28c4e" stroke-width="20" fill="transparent"/>
                    <polyline points="0,300 50,250 100,300 150,250 200,300" stroke="#d28c4e" stroke-width="20" fill="transparent"/>

                    <polygon points="50,-25 25,0 50,25 75,0" fill="#d28c4e" />
                    <polygon points="150,-25 125,0 150,25 175,0" fill="#d28c4e" />

                    <polygon points="0,25 -25,50 0,75 25,50" fill="#d28c4e" />
                    <polygon points="100,25 75,50 100,75 125,50" fill="#d28c4e" />
                    <polygon points="200,25 175,50 200,75 225,50" fill="#d28c4e" />

                    <polygon points="50,75 25,100 50,125 75,100" fill="#d28c4e" />
                    <polygon points="150,75 125,100 150,125 175,100" fill="#d28c4e" />

                    <polygon points="0,125 -25,150 0,175 25,150" fill="#d28c4e" />
                    <polygon points="100,125 75,150 100,175 125,150" fill="#d28c4e" />
                    <polygon points="200,125 175,150 200,175 225,150" fill="#d28c4e" />

                    <polygon points="50,175 25,200 50,225 75,200" fill="#d28c4e" />
                    <polygon points="150,175 125,200 150,225 175,200" fill="#d28c4e" />
                    
                    <polygon points="0,225 -25,250 0,275 25,250" fill="#d28c4e" />
                    <polygon points="100,225 75,250 100,275 125,250" fill="#d28c4e" />
                    <polygon points="200,225 175,250 200,275 225,250" fill="#d28c4e" />

                    <polygon points="50,275 25,300 50,325 75,300" fill="#d28c4e" />
                    <polygon points="150,275 125,300 150,325 175,300" fill="#d28c4e" />
                </svg><br>
                <span>Polyline and Polygon</span>
            </div>

            <div>
                <svg width="200" height="300" style="border:1px solid black; background-color: #444444;">
                    <circle cx="100" cy="150" r="50"  fill="#d28c4e" />
                    <rect x="50" y="150" width="100" height="4" fill="#444444"/>
                    <rect x="50" y="160" width="100" height="4" fill="#444444"/>
                    <rect x="50" y="170" width="100" height="4" fill="#444444"/>
                    <rect x="50" y="180" width="100" height="4" fill="#444444"/>
                    <rect x="50" y="190" width="100" height="4" fill="#444444"/>
                    <rect x="50" y="200" width="100" height="4" fill="#444444"/>
                    
                    <polyline points="30,90 35,85 40,90 45,85 50,90" stroke="#d28c4e" stroke-width="1" fill="transparent"/>
                    <polyline points="50,100 55,95 60,100 65,95 70,100" stroke="#d28c4e" stroke-width="1" fill="transparent"/>
                    <polyline points="40,110 45,105 50,110 55,105 60,110" stroke="#d28c4e" stroke-width="1" fill="transparent"/>
                    
                    <ellipse cx="175" cy="150" rx="10" ry="20" fill="#d28c4e" />
                    <ellipse cx="180" cy="150" rx="10" ry="30" fill="#d28c4e" />
                    <rect x="150" y="150" width="45" height="4" fill="#444444"/>
                    <rect x="150" y="160" width="45" height="4" fill="#444444"/>
                    <rect x="150" y="170" width="45" height="4" fill="#444444"/>

                    <polygon points="0,150 25,175 25,200 15,200 15,225 25,225 25,235 15,250 35,300 0,300" fill="#d28c4e" />
                    <line x1="15" y1="210" x2="25" y2="210" stroke="#d28c4e" stroke-width="1"/>
                    <line x1="23.5" y1="225" x2="23.5" y2="210" stroke="#d28c4e" stroke-width="1"/>
                    <line x1="20.5" y1="225" x2="20.5" y2="210" stroke="#d28c4e" stroke-width="1"/>
                    <line x1="17.5" y1="225" x2="17.5" y2="210" stroke="#d28c4e" stroke-width="1"/>
                </svg><br>
                <span>Circle, Rectangle, Polyline, Polygon and Ellipse</span><br>
                <span><i>Sunset Rollercoaster</i></span>
            </div>
        </wrapper>
        <a href="https://github.com/johnpaulmaja/SVG/" target="_blank" style="position: absolute; left:50%; bottom: 1%; text-align: center;">Github Link here!</a>
    </body>
</html> <!--Credits goes to: John Paul Maja-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width, initial-scale=1">
        <title>Abdallah Personal Portfolio page</title>
        <link rel="stylesheet" href="css/fawsome.min.css" type="text/css"> 
        <style>
            body {/*Start styling the body*/
                margin: 0px;
                padding: 0;
                overflow-x: hidden;
            }/*End styling the body*/
            
            .portfolio-container { /*Start styling the main container*/
                border: 1px solid #000;
                width: 100vw;
                margin: auto;
             } /*End the styling the main container*/
            
            .portfolio-container > #navbar { /*Start styling the nav*/
                display: block;
                background-color: #e6e6e6;
                color: #1a1a1a;
                //right: 0px;
                //left: 0px;
                
                position: fixed;
                top: 0px;
                width: 100%;
                border-top: 5px solid #00ace6;
                 
             } /*End the styling the nav*/
            .portfolio-container > #navbar > ul {
                 display: flex;
                justify-content: flex-end;
                align-items: center;
                list-style: none;
                color: #1a1a1a;
            } 
            .portfolio-container > #navbar > ul > li{
                display: block;
                margin: 9px;
                font: 37px bold fantasy;
                padding: 5px;
            }
            .portfolio-container > #navbar > ul > li:hover{
                background-color: #00ace6;
                color: black;
                transition: 3s;
                border-right: 5px solid #006080;
                border-radius: 9px;
                
            }  
            .portfolio-container > #navbar > ul > li > a{
                text-decoration: none;
                color: #1a1a1a;
            }  
            .portfolio-container > #welcome-section { /*Start styling the welcome section*/
                display: flex;
                flex-flow: column wrap;
                justify-content: center;
                align-items: center;
                background-color: #00ace6;
                text-align: center;
                height: 100vh;
                width: 100%;
                max-width:100%;
                
            }
            .portfolio-container > #welcome-section > h1 {
                padding:  5%;
            }
            .portfolio-container > #welcome-section > h2 {
                margin: 10px;
                position: relative;
                animation: dev 10s linear 2s infinite alternate;
                 overflow: hidden;
            }
            @keyframes dev {
                0%   {color:black; left:0px; top:0px;}
                25%  {color:#1a1a1a; left:20%; top:0px;}
                50%  {color:#262626; left:20%; top:200px;}
                75%  {color:green; left:-20%; top:200px;}
                100% {color:#000000; left:-20%; top:0px;}
                
              }
            .portfolio-container > #welcome-section > button {
                background-color: #e6e6e6;
               // border: none;
                color: black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 30px;
                margin: 5%;
                border-radius: 8px;
                cursor: pointer;
                width: 20%;
            }
            .portfolio-container > #welcome-section > button:hover {
                background-color: black;
                font-size: 37px;
                color:  #d9d9d9;
                border-radius: 9px;
                transition: 1s;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            } /*End the styling the welcome section*/
            .head-recommend {/*Starting head content of the the heading of my works*/
                background-color: #00394d;
                border:1px solid #00394d;
            }
            .head-recommend > .text-in-center {/*Starting head content of the the heading of my works*/
                background-color: #0083b3;
            }
            .head-recommend > .text-in-center > .head-text {
                display: grid;
                grid-template-columns: 1fr auto 1fr;
                gap: 5px;
                border-bottom: 1px solid buttonface;
                color: white;
            }
            .head-recommend > .text-in-center > .head-text::after, .head-text::before {
                content: "-------------------------------";
                text-align: center;
                color: white;
            }/*Ending of the head of projects*/
            .portfolio-container > #projects { /*Start styling the projects section*/
                 display: flex;
                flex-flow: row wrap;
                text-align: center;
                align-items: center;
                justify-content: center;
                background-color: #66d6ff;
                padding-top: 25px;
            }
            .project-link > .project-tile:hover{
                background-color: #d0e1e1;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                border-bottom: 5px solid green;
             }
            .project-link {
                text-decoration: none;
            }
            .project-link > .project-tile{
                background: #00ace6;
                width: 300px;
                height: 400px;
                overflow: hidden;
                margin: 5px;
                margin-bottom: 15px;
                padding-top: 5px;
                padding-left: 5px;
                padding-right: 5px;
                padding-bottom: 0px;
                position: static;
                word-wrap: break-word;
                text-align: center;
                text-justify: auto;
                font: 1em sans-serif, serif bold;
                border-top: 9px solid #006080;
                border-radius: 7px;
                box-shadow: 0 1px 2px rgba(0,0,0,0.15);
                transition: all 0.3s ease-in-out;
            }
            .project-link > .project-tile > img {
                width: 100%;
                height: 70%;
                object-fit: cover; 
                padding-bottom: 0px;
            }
            .detail-container {
                padding-bottom: 0px;
                padding-top: 0px;
                height: 100px;
                overflow-y: scroll;
                color: black;
            }
            .detail-container #click-me  {
                background-color: #00ace6;
                position: static;
                margin-bottom: 0;
                margin-left: 0;
                margin-right: 0;
                padding-bottom: 0px;
            }
            .detail-container > h2 {
                border: 2px solid blue;
                background-color: #e6e6e6;
                padding-bottom: 0px;

            }
            .detail-container > h2 > strong {

            }/*End the styling the projects section*/
            
            .portfolio-container > #contact-cls { /*Start styling the contact section*/
                border: 2px solid green;
            } /*End the styling the contact section*/
            @media (max-width: 600px) {/// Some of Media Query to make the site responsive
                .portfolio-container {
                    text-align: center;
                    padding: 2px;
                    margin: 1px;
                    height: auto;
                 }
                #navbar > ul {
                    display: flex;
                    flex-flow: column wrap;
                    text-align: center;
                    padding: 2px;
                    margin: 1px;
                 }
                #navbar > ul >  li {
                    margin: 0.8em 0;
                }
                .portfolio-container > #welcome-section > h2 {
                    animation-iteration-count: 0;
                }

                
            }
            @media (max-width: 900px) {
                #welcome-section {
                    border: 1px solid red;
                    width: auto;
                }
                .portfolio-container > #welcome-section > h1 {
                padding:  5%;
            }
            .portfolio-container > #welcome-section > h2 {
                margin: 3px;
                font-size: 20px;
                position: relative;
                animation: dev 10s linear 2s infinite alternate;
                overflow: hidden;
            }
            @keyframes dev {
                0%   {color:black; left:0px; top:0px;}
                25%  {color:#1a1a1a; left:21%; top:0px;}
                50%  {color:#262626; left:21%; top:110px;}
                75%  {color:green; left:-21%;; top:110px;}
                100% {color:#000000; left:-21%;; top:0px;}

              }
            .portfolio-container > #welcome-section > button {
                background-color: #e6e6e6;
               // border: none;
                color: black;
                padding: 5px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin: 5%;
                border-radius: 8px;
                cursor: pointer;
                width: 20%;
            }
            .portfolio-container > #projects { /*Start styling the projects section*/
                display: flex;
                flex-flow: column wrap;
                text-align: center;
                align-items: center;
                justify-content: center;
        
            }
            }
            .contact-container {/*Start Contact*/
            display: flex;
            flex-flow: column wrap;
            text-align: center;
            align-items: center;
            justify-content: center;
            padding:50px 0;
            color:#f0f9ff;
            background-color:#282d32;
        }
        .contact-container > .head-contact {
            display: flex;
            flex-flow: row wrap;
            color:#f0f9ff;
            background-color:#282d32;
        } 
        .contact-container > .head-contact > div >  h1{
         }
        .contact-container > .head-contact > div > ul {
            display: flex;
            flex-flow: column wrap;
            color: white;
            font-weight: bold; 
        }
        .contact-container > .head-contact > div > ul > li {
            list-style: none;
        }
        .vl {
            border-left: 6px solid white;
            height: 200px;
            margin: 15px;
        }
        .contact-container .item_social > a {
            font-size:20px;
            width:36px;
            height:36px;
            line-height:36px;
            display:inline-block;
            text-align:center;
            border-radius:50%;
            box-shadow:0 0 0 1px rgba(255,255,255,0.4);
            margin:0 8px;
            color:#fff;
            opacity:0.75;
        }
        .fa {
            color: white;
        }
        #fb-link  {
            background: #3B5998;
        }
        #tw-link {
        background: #55ACEE;
         }

        #google-link {
        background: #dd4b39;
         }

        #linkedin-link {
           background: #007bb5;
        }
        #in-link {
           background: #125688;
        }
        #y-link {
            background: #430297;
         }
        .contact-container .item_social  > a:hover {
            opacity:1.3;
        }
        .foot-box > .copyright {
            text-align:center;
            padding-top:24px;
            opacity:0.2;
            font-size:30px;
            margin-bottom:0;
        }/*End Contact*/
        @media (max-width: 1000px) {
            .contact-container {/*Start Contact*/
                
            }
            .contact-container > .head-contact {
                display: flex;
                flex-flow: column wrap;
                color:#f0f9ff;
                background-color:#282d32;
            } 
            #contact-title {
                padding-bottom: 0px;
                border: 2px solid red;
            }
            .contact-container > .head-contact > div >  h1{
             }
            .contact-container > .head-contact > div > ul {
                display: flex;
                flex-flow: column wrap;
                color: white;
                font-weight: bold; 
            }
            .contact-container > .head-contact > div > ul > li {
                list-style: none;
            }
            .vl {
                border-left: 0px solid white;
                border-bottom: 6px solid white;
                height: 0;
            }

        }
        </style>
    </head>
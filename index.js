import React from 'react';
import ReactDOM from 'react-dom';
import { createRoot } from "react-dom/client";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

import Main from "./Main";

const rootElement = document.getElementById("root");
const root = createRoot(rootElement);

root.render(
  <div>
        <div id="HeaderHere" className="container"></div>
        <br/><br/><br/>
        <div id="PlayerHere" className="container"></div>
        <div id="TimerHere" className="container"></div>
        <div id="ElapsedHere" className="container"></div>

        <div className="p-4" id="AppHere">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        </div>

        <br/><br/>

        <div id="FooterHere"></div>
    </div>
);
<style>
    /*
Common
*/

    .wizard,
    .tabcontrol {
        display: block;
        width: 100%;
        overflow: hidden;
    }

    .wizard a,
    .tabcontrol a {
        outline: 0;
    }

    .wizard ul,
    .tabcontrol ul {
        list-style: none !important;
        padding: 0;
        margin: 0;
    }

    .wizard ul>li,
    .tabcontrol ul>li {
        display: block;
        padding: 0;
    }

    /* Accessibility */
    .wizard>.steps .current-info,
    .tabcontrol>.steps .current-info {
        position: absolute;
        left: -999em;
    }

    .wizard>.content>.title,
    .tabcontrol>.content>.title {
        position: absolute;
        left: -999em;
    }



    /*
Wizard
*/

    .wizard>.steps {
        position: relative;
        display: block;
        width: 100%;
    }

    .wizard.vertical>.steps {
        display: inline;
        float: left;
        width: 30%;
    }

    .wizard>.steps .number {
        font-size: 1.2em/*1.429em*/;
    }

    .wizard>.steps>ul{
        display: flex;
        justify-content: center;
    }

    .wizard>.steps>ul>li {
        width: 25%;
    }

    

    .wizard>.steps>ul>li,
    .wizard>.actions>ul>li {
        float: left;
    }

    .wizard.vertical>.steps>ul>li {
        float: none;
        width: 100%;
    }

    .wizard>.steps a,
    .wizard>.steps a:hover,
    .wizard>.steps a:active {
        display: block;
        width: auto;
        margin: 0 0.5em 0.5em;
        padding: 0.5em 0.5em;
        text-decoration: none;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
        box-shadow: 3px 3px 3px var(--main-shodow);
        background: var(--second-yellow);
        color: var(--third-gray);
    }

    .wizard>.steps .disabled a,
    .wizard>.steps .disabled a:hover,
    .wizard>.steps .disabled a:active {
        background: #eee;
        color: #aaa;
        cursor: default;
    }

    .wizard>.steps .current a,
    .wizard>.steps .current a:hover,
    .wizard>.steps .current a:active {
        background: var(--third-yellow);
        color: #fff;
        cursor: default;
    }

    .wizard>.steps .done a,
    .wizard>.steps .done a:hover,
    .wizard>.steps .done a:active {
        background: var(--second-yellow);
        color: var(--third-gray);
    }

    .wizard>.steps .error a,
    .wizard>.steps .error a:hover,
    .wizard>.steps .error a:active {
        background: #ff3111;
        color: #fff;
    }

    .wizard>.content {
        background: white;
        display: block;
        margin: 0.5em;
        min-height: 35em;
        overflow-x:hidden ;
        /* overflow-y: scroll; */
         /*去除滾動條*/
        position: relative;
        width: auto;

        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    .wizard.vertical>.content {
        display: inline;
        float: left;
        margin: 0 2.5% 0.5em 2.5%;
        width: 65%;
    }

    .wizard>.content>.body {
        float: left;
        /* position: absolute; */             /*造成雙滾動條*/
        width: 95%;
        height: 95%;
        padding: 2.5%;
    }

    .wizard>.content>.body ul {
        list-style: disc !important;
    }

    .wizard>.content>.body ul>li {
        display: list-item;
    }

    .wizard>.content>.body>iframe {
        border: 0 none;
        width: 100%;
        height: 100%;
    }

    .wizard>.content>.body input {
        display: block;
        border: 1px solid #ccc;
    }

    .wizard>.content>.body input[type="checkbox"] {
        display: inline-block;
    }

    .wizard>.content>.body input.error {
        background: rgb(251, 227, 228);
        border: 1px solid #fbc2c4;
        color: #8a1f11;
    }

    .wizard>.content>.body label {
        display: inline-block;
        margin-bottom: 0.5em;
    }

    .wizard>.content>.body label.error {
        color: #8a1f11;
        display: inline-block;
        margin-left: 1.5em;
    }

    .wizard>.actions {
        position: relative;
        display: block;
        text-align: right;
        width: 100%;
    }

    .wizard.vertical>.actions {
        display: inline;
        float: right;
        margin: 0 2.5%;
        width: 95%;
    }

    .wizard>.actions>ul {
        display: inline-block;
        text-align: right;
    }

    .wizard>.actions>ul>li {
        margin: 0 0.5em;
    }

    .wizard.vertical>.actions>ul>li {
        margin: 0 0 0 1em;
    }

    .wizard>.actions a,
    .wizard>.actions a:hover,
    .wizard>.actions a:active {
        background: var(--main-yellow);
        color: var(--main-black);
        display: block;
        padding: 0.5em 1em;
        text-decoration: none;

        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    .wizard>.actions .disabled a,
    .wizard>.actions .disabled a:hover,
    .wizard>.actions .disabled a:active {
        background: #eee;
        color: #aaa;
    }

    .wizard>.loading {}

    .wizard>.loading .spinner {}



    /*
Tabcontrol
*/

    .tabcontrol>.steps {
        position: relative;
        display: block;
        width: 100%;
    }

    .tabcontrol>.steps>ul {
        position: relative;
        margin: 6px 0 0 0;
        top: 1px;
        z-index: 1;
    }

    .tabcontrol>.steps>ul>li {
        float: left;
        margin: 5px 2px 0 0;
        padding: 1px;

        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .tabcontrol>.steps>ul>li:hover {
        background: #edecec;
        border: 1px solid #bbb;
        padding: 0;
    }

    .tabcontrol>.steps>ul>li.current {
        background: #fff;
        border: 1px solid #bbb;
        border-bottom: 0 none;
        padding: 0 0 1px 0;
        margin-top: 0;
    }

    .tabcontrol>.steps>ul>li>a {
        color: #5f5f5f;
        display: inline-block;
        border: 0 none;
        margin: 0;
        padding: 10px 30px;
        text-decoration: none;
    }

    .tabcontrol>.steps>ul>li>a:hover {
        text-decoration: none;
    }

    .tabcontrol>.steps>ul>li.current>a {
        padding: 15px 30px 10px 30px;
    }

    .tabcontrol>.content {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 35em;
        overflow: hidden;
        border-top: 1px solid #bbb;
        padding-top: 20px;
    }

    .tabcontrol>.content>.body {
        float: left;
        position: absolute;
        width: 95%;
        height: 95%;
        padding: 2.5%;
    }

    .tabcontrol>.content>.body ul {
        list-style: disc !important;
    }

    .tabcontrol>.content>.body ul>li {
        display: list-item;
    }

</style>

<style>
    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .card-title {
        margin-bottom: .75rem;
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 0 solid rgba(0, 0, 0, .125);
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 0) calc(.25rem - 0) 0 0;
    }

    .card-footer {
        padding: .75rem 1.25rem;
        background-color: rgba(0, 0, 0, .03);
        border-top: 0 solid rgba(0, 0, 0, .125);
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(.25rem - 0) calc(.25rem - 0);
    }

    .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    @media (prefers-reduced-motion:reduce) {
        .badge {
            transition: none;
        }
    }

    .badge:empty {
        display: none;
    }

    .bg-primary {
        background-color: #007bff !important;
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    .float-left {
        float: left !important;
    }

    .float-right {
        float: right !important;
    }

    @media print {

        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important;
        }

        a:not(.btn) {
            text-decoration: underline;
        }

        img {
            page-break-inside: avoid;
        }

        h3 {
            orphans: 3;
            widows: 3;
        }

        h3 {
            page-break-after: avoid;
        }

        .badge {
            border: 1px solid #000;
        }
    }

    .card {
        box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
        margin-bottom: 1rem;
    }

    .card-body::after,
    .card-footer::after,
    .card-header::after {
        display: block;
        clear: both;
        content: "";
    }

    .card-header {
        background-color: transparent;
        border-bottom: 1px solid rgba(0, 0, 0, .125);
        padding: .75rem 1.25rem;
        position: relative;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }

    .card-header>.card-tools {
        float: right;
        margin-right: -.625rem;
    }

    .card-header>.card-tools [data-toggle=tooltip] {
        position: relative;
    }

    .card-title {
        float: left;
        font-size: 1.1rem;
        font-weight: 400;
        margin: 0;
    }

    .btn-tool {
        background: 0 0;
        color: #adb5bd;
        font-size: .875rem;
        margin: -.75rem 0;
        padding: .25rem .5rem;
    }

    .btn-tool:hover {
        color: #495057;
    }

    .btn-tool:focus {
        box-shadow: none !important;
    }

    .btn:disabled {
        cursor: not-allowed;
    }

    .direct-chat .card-body {
        overflow-x: hidden;
        padding: 0;
        position: relative;
    }

    .direct-chat-messages {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
        height: 250px;
        overflow: auto;
        padding: 10px;
    }

    .direct-chat-msg,
    .direct-chat-text {
        display: block;
    }

    .direct-chat-msg {
        margin-bottom: 10px;
    }

    .direct-chat-msg::after {
        display: block;
        clear: both;
        content: "";
    }

    .direct-chat-contacts,
    .direct-chat-messages {
        transition: -webkit-transform .5s ease-in-out;
        transition: transform .5s ease-in-out;
        transition: transform .5s ease-in-out, -webkit-transform .5s ease-in-out;
    }

    .direct-chat-text {
        border-radius: .3rem;
        background: #d2d6de;
        border: 1px solid #d2d6de;
        color: #444;
        margin: 5px 0 0 50px;
        padding: 5px 10px;
        position: relative;
    }

    .direct-chat-text::after,
    .direct-chat-text::before {
        border: solid transparent;
        border-right-color: #d2d6de;
        content: ' ';
        height: 0;
        pointer-events: none;
        position: absolute;
        right: 100%;
        top: 15px;
        width: 0;
    }

    .direct-chat-text::after {
        border-width: 5px;
        margin-top: -5px;
    }

    .direct-chat-text::before {
        border-width: 6px;
        margin-top: -6px;
    }

    .right .direct-chat-text {
        margin-left: 0;
        margin-right: 50px;
    }

    .right .direct-chat-text::after,
    .right .direct-chat-text::before {
        border-left-color: #d2d6de;
        border-right-color: transparent;
        left: 100%;
        right: auto;
    }

    .direct-chat-img {
        border-radius: 50%;
        float: left;
        height: 40px;
        width: 40px;
    }

    .right .direct-chat-img {
        float: right;
    }

    .direct-chat-infos {
        display: block;
        font-size: .875rem;
        margin-bottom: 2px;
    }

    .direct-chat-name {
        font-weight: 600;
    }

    .direct-chat-timestamp {
        color: #697582;
    }

    .direct-chat-contacts {
        -webkit-transform: translate(101%, 0);
        transform: translate(101%, 0);
        background: #343a40;
        bottom: 0;
        color: #fff;
        height: 250px;
        overflow: auto;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .contacts-list {
        padding-left: 0;
        list-style: none;
    }

    .contacts-list>li {
        border-bottom: 1px solid rgba(0, 0, 0, .2);
        margin: 0;
        padding: 10px;
    }

    .contacts-list>li::after {
        display: block;
        clear: both;
        content: "";
    }

    .contacts-list>li:last-of-type {
        border-bottom: 0;
    }

    .contacts-list-img {
        border-radius: 50%;
        float: left;
        width: 40px;
    }

    .contacts-list-info {
        color: #fff;
        margin-left: 45px;
    }

    .contacts-list-name {
        display: block;
    }

    .contacts-list-name {
        font-weight: 600;
    }

    .contacts-list-date {
        color: #ced4da;
        font-weight: 400;
    }

    .contacts-list-msg {
        color: #b1bbc4;
    }

    .direct-chat-primary .right>.direct-chat-text {
        background: #007bff;
        border-color: #007bff;
        color: #fff;
    }

    .direct-chat-primary .right>.direct-chat-text::after,
    .direct-chat-primary .right>.direct-chat-text::before {
        border-left-color: #007bff;
    }

</style>

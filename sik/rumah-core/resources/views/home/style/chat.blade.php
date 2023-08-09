<style>
    /*! CSS Used from: http://localhost/adminlte/dist/css/adminlte.min.css */
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
        border-style: none;
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

        img {
            page-break-inside: avoid;
        }
    }

    .direct-chat-messages {
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

    .direct-chat-messages {
        transition: transform .5s ease-in-out;
    }

    .direct-chat-text {
        border-radius: .3rem;
        background-color: #d2d6de;
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
        content: " ";
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

    .direct-chat-primary .right>.direct-chat-text {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }

    .direct-chat-primary .right>.direct-chat-text::after,
    .direct-chat-primary .right>.direct-chat-text::before {
        border-left-color: #007bff;
    }

</style>

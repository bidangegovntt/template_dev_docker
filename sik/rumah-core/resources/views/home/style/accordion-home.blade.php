<style>
    /*! CSS Used from: https://finder.createx.studio/css/theme.min.css ; media=screen */
    @media screen {

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        .h6,
        h3 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
            color: #1f1b2d;
        }

        h3 {
            font-size: calc(1.3rem + 0.6vw);
        }

        @media (min-width: 1200px) {
            h3 {
                font-size: 1.75rem;
            }
        }

        .h6 {
            font-size: 1.125rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1.25rem;
        }

        a {
            color: #fd5631;
            text-decoration: underline;
        }

        a:hover {
            color: #fd3509;
            text-decoration: none;
        }

        img {
            vertical-align: middle;
        }

        button {
            border-radius: 0;
        }

        button:focus:not(:focus-visible) {
            outline: 0;
        }

        button {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button {
            text-transform: none;
        }

        button,
        [type=button] {
            -webkit-appearance: button;
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        .btn {
            display: inline-block;
            font-weight: bold;
            line-height: 1.5;
            color: #666276;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .575rem 1.5rem;
            font-size: 1rem;
            border-radius: .5rem;
            transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out, box-shadow .2s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none;
            }
        }

        .btn:hover {
            color: #666276;
        }

        .btn:focus {
            outline: 0;
            box-shadow: unset;
        }

        .btn:active {
            box-shadow: unset;
        }

        .btn:active:focus {
            box-shadow: unset, unset;
        }

        .btn:disabled {
            pointer-events: none;
            opacity: .65;
            box-shadow: none;
        }

        .btn-light {
            color: #000;
            background-color: #fff;
            border-color: #fff;
            box-shadow: unset;
        }

        .btn-light:hover {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-light:focus {
            color: #000;
            background-color: #fff;
            border-color: #fff;
            box-shadow: unset, 0 0 0 0 rgba(217, 217, 217, .5);
        }

        .btn-light:active {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-light:active:focus {
            box-shadow: unset, 0 0 0 0 rgba(217, 217, 217, .5);
        }

        .btn-light:disabled {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .collapse:not(.show) {
            display: none;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #efecf3;
            border-radius: .75rem;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem 1.25rem;
        }

        .card-title {
            margin-bottom: .5rem;
        }

        .badge {
            display: inline-block;
            padding: .4375em .75em;
            font-size: 0.8125em;
            font-weight: normal;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .375rem;
        }

        .badge:empty {
            display: none;
        }

        .opacity-80 {
            opacity: .8 !important;
        }

        .d-flex {
            display: flex !important;
        }

        .shadow-sm {
            box-shadow: 0 .125rem .125rem -0.125rem rgba(31, 27, 45, .08), 0 .25rem .75rem rgba(31, 27, 45, .08) !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .me-1 {
            margin-right: .25rem !important;
        }

        .me-2 {
            margin-right: .5rem !important;
        }

        .me-3 {
            margin-right: 1rem !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-2 {
            margin-bottom: .5rem !important;
        }

        .mt-n1 {
            margin-top: -0.25rem !important;
        }

        .pt-0 {
            padding-top: 0 !important;
        }

        .pt-1 {
            padding-top: .25rem !important;
        }

        .ps-1 {
            padding-left: .25rem !important;
        }

        .fs-base {
            font-size: 1rem !important;
        }

        .fs-sm {
            font-size: 0.875rem !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        .text-primary {
            color: #fd5631 !important;
        }

        .text-dark {
            color: #1f1b2d !important;
        }

        .text-muted {
            color: #9691a4 !important;
        }

        .bg-secondary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        .bg-faded-accent {
            background-color: rgba(93, 60, 242, .1) !important;
        }

        .bg-faded-danger {
            background-color: rgba(242, 60, 73, .1) !important;
        }

        html * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        a {
            transition: color .2s ease-in-out;
        }

        a:focus {
            outline: none;
        }

        img {
            max-width: 100%;
            height: auto;
            vertical-align: middle;
        }

        ::-moz-selection {
            background: rgba(93, 60, 242, .15);
        }

        ::selection {
            background: rgba(93, 60, 242, .15);
        }

        ::-moz-selection {
            background: rgba(93, 60, 242, .15);
        }

        button:focus {
            outline: none;
        }

        [class^=fi-] {
            display: inline-block;
            font-family: "finder-icons" !important;
            speak: never;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            vertical-align: middle;
            line-height: 1;
        }

        .fi-cash:before {
            content: "";
        }

        .fi-heart:before {
            content: "";
        }

        .fi-map-pin:before {
            content: "";
        }

        h3 {
            line-height: 1.3;
        }

        .h6 {
            line-height: 1.4;
        }

        .btn-light {
            color: #454056;
        }

        .btn-light:hover,
        .btn-light:focus,
        .btn-light:active {
            color: #fd5631;
        }

        .btn-light:disabled {
            color: #9691a4;
        }

        .btn.shadow-sm:hover,
        .btn-icon.shadow-sm:hover {
            box-shadow: 0 .125rem .5rem -0.25rem rgba(31, 27, 45, .12), 0 .25rem 1rem rgba(31, 27, 45, .12) !important;
        }

        .btn-xs {
            font-weight: normal;
            padding: .375rem .875rem;
            font-size: 0.75rem;
            border-radius: .375rem;
        }

        .btn>[class^=fi-] {
            margin-top: -0.1875rem;
            vertical-align: middle;
        }

        .btn-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.75rem;
            height: 2.75rem;
            padding: 0;
        }

        .btn-icon>i {
            margin-top: .0625rem !important;
            font-size: 1.1em;
        }

        .btn-icon.btn-xs {
            width: 2rem;
            height: 2rem;
        }

        .btn-icon.btn-xs>i {
            font-size: 1.2em;
        }

        .card[data-bs-toggle=collapse] {
            transition: border-color .2s ease-in-out, background-color .2s ease-in-out, box-shadow .2s ease-in-out;
            cursor: pointer;
        }

        .card[data-bs-toggle=collapse] .card-title {
            transition: color .25s ease-in-out;
        }

        .card[data-bs-toggle=collapse].collapsed .card-title {
            color: #454056;
        }

        .card[data-bs-toggle=collapse]:not(.collapsed) {
            background-color: #fff !important;
            box-shadow: 0 .125rem .125rem -0.125rem rgba(31, 27, 45, .08), 0 .25rem .75rem rgba(31, 27, 45, .08);
        }

        .card[data-bs-toggle=collapse]:not(.collapsed) .card-title {
            color: #fd5631;
        }

        .badge.bg-faded-accent {
            color: #5d3cf2;
        }

        .badge.bg-faded-danger {
            color: #f23c49;
        }
    }

    /*! CSS Used fontfaces */
    @font-face {
        font-family: "finder-icons";
        src: url("https://finder.createx.studio/fonts/finder-icons.ttf?7648j3") format("truetype"), url("https://finder.createx.studio/fonts/finder-icons.woff?7648j3") format("woff"), url("https://finder.createx.studio/fonts/finder-icons.svg?7648j3#finder-icons") format("svg");
        font-weight: normal;
        font-style: normal;
        font-display: block;
    }

</style>

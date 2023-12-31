<style>
    @media print {
        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important;
        }
    }

    .info-box {
        box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
        border-radius: .25rem;
        background-color: #fff;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 1rem;
        min-height: 80px;
        padding: .5rem;
        position: relative;
        width: 100%;
    }

    .info-box .info-box-icon {
        border-radius: .25rem;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.875rem;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
        width: 70px;
    }

    .info-box .info-box-content {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        line-height: 1.8;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        padding: 0 10px;
    }

    .info-box .info-box-number {
        display: block;
        margin-top: .25rem;
        font-weight: 700;
    }

    .info-box .info-box-text {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

</style>

<style>

    #upgrade-modal {
        display: none;
        position: absolute;
        bottom:50px;
        right:50px;
        z-index: 999999;
        background-color: #CDCDCD;
        text-align: center;
        width: 90%;
        height: 90%;
        min-height: 500px;
    }

    #upgrade-modal h1 {
        font-family: 'roboto-thin', 'roboto', Helvetica, arial, sans-serif;
        font-size: 28px !important;
        padding: 0 0 25px 0;
        margin: 0 !important;
        color: #000033;
        padding-top: 0px;
        padding-bottom: 20px;
        font-weight: 800;
    }

    #upgrade-modal h2 {
        font-family: 'roboto-thin', 'roboto', Helvetica, arial, sans-serif;
        color: #36c157;
        font-size: 34px;
        line-height: 15px;
        padding-bottom: 4px;
        margin: 0;
        font-weight: 100;
    }

    #upgrade-modal h3 {
        font-family: 'roboto-thin', 'roboto', Helvetica, arial, sans-serif;
        margin: 20px 0 25px 0;
        font-size: 75px;
        padding: 0 0 8px 0;
        color: #008B8B;
        font-weight: 100;
    }

    #upgrade-modal h3 span.upgrade_frequency {
        font-size: 17px;
        text-transform: uppercase;
        letter-spacing: 2px;
        vertical-align: super;
    }

    #upgrade-modal h4 {
        color: #0a6ebd;
    }

    #upgrade-modal ul {
        list-style: none;
        color: #008B8B;
        padding: 20px 0;
    }

    #upgrade-modal .col-md-4 {
        padding: 75px 20px;
        border-right: 0;
    }

    #upgrade-modal .col-md-offset-2 {
        border-top: 1px solid #343333;
        border-right: 1px solid #343333;
    }

    #upgrade-modal .columns {
        border-top: 1px solid #343333;
    }

    #upgrade-modal ul {
        border-top: 1px solid #343333;
    }

    #upgrade-modal ul li {
        font-size: 17px;
        line-height: 35px;
        font-weight: 400;
    }

    #upgrade-modal p.subhead {
        font-size: 15px;
        margin: 5px 0 5px 0;
        padding-top: 10px;
        padding-bottom: 10px;
        font-weight: 400;
        color: #ccd0d2;
    }

    #upgrade-modal .btn {
        width: 260px;
        padding: 16px 0 16px 0;
    }

    #upgrade-modal i.fa-close {
        cursor: pointer;
        color: #fff;
        font-size: 26px !important;
        padding-top: 30px;
    }

    #upgrade-modal label.radio-inline {
        padding: 0px 30px 30px 30px;
        font-size: 22px;
        color: #fff;
        vertical-align: middle;
    }

    #upgrade-modal select {
        vertical-align: top;
        width: 140px;
    }

</style>

{!! Former::open('settings/upgrademodal')->addClass('upgrademodal') !!}


<div id="upgrade-modal" class="container" style="">
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="#"><i class="fa fa-close" onclick="hideUpgradeModal()" title="{{ trans('texts.close') }}"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Features</h1>
            <h4>
                <label for="plan_term_month" class="radio-inline">
                    <input value="month" id="plan_term_month" type="radio" name="plan_term" checked>Monthly</label>
                <label for="plan_term_year" class="radio-inline">
                    <input value="year" id="plan_term_year" type="radio" name="plan_term">Annually</label>
            </h4>
        </div>
        <div class="col-md-4 col-md-offset-2 text-center">
            <h2>Upgrade Title</h2>
            <p class="subhead">Discount</p>
            <img width="65" src="#"/>
            <h3>$<span id="upgrade_pro_price">Price</span> <span
                        class="upgrade_frequency">/ Frequency</span></h3>
            <select style="visibility:hidden">
            </select>
            <p>&nbsp;</p>
            <ul>
                <li>feature1</li>
                <li>feature2</li>
                <li>much_more</li>
            </ul>

        </div>
        <div class="col-md-4 columns text-center">
            <h2>Enterprise</h2>
            <p class="subhead">discount</p>
            <img width="65" src="#"/>
            <h3>$<span id="upgrade_enterprise_price">Enter Price</span> <span
                        class="upgrade_frequency">/ Month</span></h3>
            <select name="num_users" id="upgrade_num_users" onchange="updateUpgradePrices()">
                <option value="2">1 to 2 {{ trans('texts.users') }}</option>
                <option value="5">3 to 5 {{ trans('texts.users') }}</option>
                <option value="10">6 to 10 {{ trans('texts.users') }}</option>
                <option value="20">11 to 20 {{ trans('texts.users') }}</option>
            </select>
            <p>&nbsp;</p>
            <ul>
                <li>feature1</li>
                <li>feature2</li>
                <li>much_more</li>
            </ul>

        </div>
    </div>
</div>

{!! Former::close() !!}

<script type="text/javascript">

    function showUpgradeModal() {
        $(window).scrollTop(0);
        $('#upgrade-modal').fadeIn();
    }

    function hideUpgradeModal() {
        $('#upgrade-modal').fadeOut();
    }

    $(function () {
        $(document).keyup(function (e) {
            if (e.keyCode == 27) { // escape key maps to keycode `27`
                hideUpgradeModal();
            }
        });
    })

</script>

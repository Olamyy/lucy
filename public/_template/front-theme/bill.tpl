{include file="./header.tpl"}

<script>
    alert({$transaction_code});
    $('#bill').submit();
</script>

<!-- Form Inputs -->
<div class="animated fadeinup form-section">
    <blockquote>
        Soccertrivia billing Arena
    </blockquote>
    <form action="{$BASE_URL}Billing/" method="POST" id="bill">
        {if $error|default:''}
            <div class="notification notification-danger">
                <a class="close-notification no-smoothState"><i class="ion-android-close"></i></a>
                {foreach from=$error item=err}
                    <p>{$err}</p>
                {/foreach}
            </div>
        {/if}
        <div>
            <div class="input-field animated fadeinright">
                {if $user_profile|default:''}
                <input id="disabled" name="msisdn" type="hidden" class="validate" hidden value="{$user_profile.msisdn}">
                <label for="msisdn">Enter the MSISDN to bill</label>
                {/if}
            </div>
            <div class="input-field animated fadeinright">
                <input id="amount" name="amount" type="hidden" class="validate" hidden value="50">
                <label for="amount">Amount</label>
            </div>
            <div class="input-field animated fadeinright">
                <input id="transaction_code" name="transaction_code" type="hidden" class="validate" value="{$data.transaction_code|default:''}">
                <label for="transaction_code">{$data.transaction_code|default:''}</label>
            </div>
            <div class="input-field animated fadeinright">
                <input id="redirect_url" name="redirect_url" type="hidden" class="validate" value="{$data.redirect_url|default:''}">
                <label for="redirect_url">{$data.redirect_url|default:''}</label>
            </div>
            <button class="btn pull-right waves-effect waves-light primary-color animated bouncein delay-6" type="submit">Pay</button>
            <div class="clearfix"></div>
        </div>
    </form>
</div>


{include file="./footer.tpl"}
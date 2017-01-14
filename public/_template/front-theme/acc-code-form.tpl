<!-- Form Inputs -->
<div class="animated fadeinup form-section">
    <blockquote>
        Enter your code below to continue from where you stopped
    </blockquote>
    <form action="{$BASE_URL}welcome/{if $smarty.get.status}?status={$smarty.get.status}&msisdn={$smarty.get.msisdn|default:''}&operator={$smarty.get.operator|default:''}{/if}" method="POST">
        <div>
            <div class="input-field animated fadeinright">
                <input id="p_code" name="p_code" type="password" class="validate" required>
                <label for="p_code">Access Code</label>
            </div>
            <input type="hidden" name="p_type" value="validate" />
            <button class="btn pull-right waves-effect waves-light primary-color animated bouncein delay-6" type="submit">Validate Code</button>
            <div class="clearfix"></div>
        </div>
    </form>
</div>
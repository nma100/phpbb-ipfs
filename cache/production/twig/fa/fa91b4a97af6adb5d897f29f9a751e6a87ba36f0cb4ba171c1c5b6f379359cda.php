<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ucp_register.html */
class __TwigTemplate_d90c025a6c245227964c8239c19634a7a22a6aa66532afd7979a089c78d847ab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script>
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 9
        echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
        echo "_lang=' + lang_iso + '; path=";
        echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
</script>

<form id=\"register\" method=\"post\" action=\"";
        // line 15
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<div class=\"panel\">
\t<div class=\"inner\">

\t<h2>";
        // line 20
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " - ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION");
        echo "</h2>

\t<fieldset class=\"fields2\">
\t";
        // line 23
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<dl><dd class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</dd></dl>";
        }
        // line 24
        echo "\t";
        if ((isset($context["L_REG_COND"]) ? $context["L_REG_COND"] : null)) {
            // line 25
            echo "\t\t<dl><dd><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REG_COND");
            echo "</strong></dd></dl>
\t";
        }
        // line 27
        echo "\t";
        // line 28
        echo "\t<dl>
\t\t<dt><label for=\"username\">";
        // line 29
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
        // line 30
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"new_password\">";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" tabindex=\"2\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 34
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEW_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"password_confirm\">";
        // line 37
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"password\"  tabindex=\"3\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 38
        echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"email\">";
        // line 41
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"email\" tabindex=\"4\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 42
        echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo "\" autocomplete=\"off\" /></dd>
\t\t</dl>

\t";
        // line 45
        // line 46
        echo "\t<hr />

\t";
        // line 48
        // line 49
        echo "\t<dl>
\t\t<dt><label for=\"lang\">";
        // line 50
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
        // line 51
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
        echo "\">";
        echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
        echo "</select></dd>
\t</dl>

\t";
        // line 54
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_register.html", 54)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 55
        echo "
\t";
        // line 56
        // line 57
        echo "\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", []))) {
            // line 58
            echo "\t\t<dl><dd><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ITEMS_REQUIRED");
            echo "</strong></dd></dl>

\t";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 61
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 62
                if ($this->getAttribute($context["profile_fields"], "FIELD_ID", [])) {
                    echo " for=\"";
                    echo $this->getAttribute($context["profile_fields"], "FIELD_ID", []);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["profile_fields"], "LANG_NAME", []);
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", [])) {
                    echo " *";
                }
                echo "</label>
\t\t\t";
                // line 63
                if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", [])) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", []);
                    echo "</span>";
                }
                // line 64
                echo "\t\t\t";
                if ($this->getAttribute($context["profile_fields"], "ERROR", [])) {
                    echo "<br /><span class=\"error\">";
                    echo $this->getAttribute($context["profile_fields"], "ERROR", []);
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 65
                echo $this->getAttribute($context["profile_fields"], "FIELD", []);
                echo "</dd>
\t\t</dl>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t";
        }
        // line 69
        echo "
\t";
        // line 70
        // line 71
        echo "\t</fieldset>
\t</div>
</div>
";
        // line 74
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 75
            echo "\t";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 76
            echo "\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "ucp_register.html", 76)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 78
        echo "
";
        // line 79
        if ((isset($context["S_COPPA"]) ? $context["S_COPPA"] : null)) {
            // line 80
            echo "<div class=\"panel\">
\t<div class=\"inner\">

\t<h4>";
            // line 83
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_COMPLIANCE");
            echo "</h4>

\t<p>";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_EXPLAIN");
            echo "</p>
\t</div>
</div>
";
        }
        // line 89
        echo "
";
        // line 90
        // line 91
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons\">
\t\t";
        // line 96
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<input type=\"reset\" value=\"";
        // line 97
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 98
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"button1 default-submit-action\" />
\t\t";
        // line 99
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>

\t</div>
</div>
</form>

";
        // line 106
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 106)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 106,  325 => 99,  321 => 98,  317 => 97,  313 => 96,  306 => 91,  305 => 90,  302 => 89,  295 => 85,  290 => 83,  285 => 80,  283 => 79,  280 => 78,  266 => 76,  262 => 75,  260 => 74,  255 => 71,  254 => 70,  251 => 69,  248 => 68,  239 => 65,  230 => 64,  224 => 63,  210 => 62,  207 => 61,  203 => 60,  197 => 58,  194 => 57,  193 => 56,  190 => 55,  178 => 54,  170 => 51,  165 => 50,  162 => 49,  161 => 48,  157 => 46,  156 => 45,  148 => 42,  143 => 41,  135 => 38,  130 => 37,  122 => 34,  115 => 33,  107 => 30,  100 => 29,  97 => 28,  95 => 27,  89 => 25,  86 => 24,  80 => 23,  72 => 20,  62 => 15,  51 => 9,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_register.html", "");
    }
}

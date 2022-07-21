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

/* posting_buttons.html */
class __TwigTemplate_d955538212eea36482efd06138c530c5dbdc467ecc35b7340c5becc531107c11 extends \Twig\Template
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
        echo "
<script>
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 4
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", [])) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", []));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", []);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}
\t
\tconst IPFS_GATEWAY = 'https://ipfs.io/ipfs';
\tconst TOKEN = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkaWQ6ZXRocjoweDY5RUUzRjFiNjg4MDEyNDczQkY2MTIzQWM0QjA5MDQyNGVENmRFRDYiLCJpc3MiOiJ3ZWIzLXN0b3JhZ2UiLCJpYXQiOjE2NTIzNTc3NzgyNzMsIm5hbWUiOiJXZWIzIGltYWdlIGhvc3RpbmcifQ.i_1AXJWcdNRsYYPMPxu4PG7lim5EHPxzoQV4TM5OVLo';
\tconst ENDPOINT = 'https://api.web3.storage/upload';

\tfunction show_progress(percentage) {
\t\tlet elem = document.getElementById('upload-info');
\t\tif (percentage == 100) {
\t\t\telem.innerHTML = 'Wait please ... ';
\t\t} else {
\t\t\telem.innerHTML = 'Uploading ... ' + percentage + '%';
\t\t}
\t}

\tfunction ipfs_upload(file, uploadProgress) {
\t    
\t    return new Promise((resolve, reject) => {
\t
\t        let onRequestCompleted = function (e) {
\t            let response = JSON.parse(e.currentTarget.responseText);
\t            resolve(response.cid);
\t        };
\t
\t        let onUploadProgress = function (e) {
\t            const percentage = Math.round((e.loaded * 100) / e.total);
\t            uploadProgress(percentage);
\t        };
\t    
\t        let onError = function (e) {
\t            console.error('API Error', e);
\t            reject(e);
\t        };
\t
\t        let xhr = new XMLHttpRequest();
\t        xhr.open(\"POST\", ENDPOINT);
\t        xhr.setRequestHeader('Authorization', 'Bearer ' + TOKEN);\t
\t        xhr.setRequestHeader('X-NAME', encodeURIComponent(file.name));\t
\t        xhr.addEventListener('load', onRequestCompleted);
\t        xhr.addEventListener('error', onError);
\t        xhr.upload.addEventListener('progress', onUploadProgress);
\t        xhr.upload.addEventListener('error', onError);
\t        xhr.send(file);
\t    });
\t}

\tasync function select_img() {
\t\tdocument.getElementById('upload-info').style.display = 'block';
        const file =  document.getElementById('input-file').files.item(0);
        const cid = await ipfs_upload(file, show_progress);
        const encoded_name = encodeURIComponent(file.name);
        const img_url = IPFS_GATEWAY + '/' + cid + '?filename=' + encoded_name;
\t\tinsert_text('[img]' + img_url + '[/img]');
\t\tphpbb.alert.close(\$('#phpbb_alert'), true);
    }
\t
\tfunction handle_img() {
\t\tlet upload_form = '<input id=\"input-file\" onchange=\"select_img();\" type=\"file\" style=\"padding-top: 8px;\" />';
\t\tupload_form += '<div id=\"upload-info\" style=\"padding-top: 15px; display: none;\"></div>';
\t\tphpbb.alert('Insert image', upload_form);
\t}
\t
</script>
";
        // line 89
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('37');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 90
        echo "
";
        // line 91
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 92
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<dl style=\"clear: left;\">
\t\t<dt><label>";
            // line 94
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd id=\"color_palette_placeholder\" class=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t</dl>
</div>

";
            // line 99
            // line 100
            echo "<div id=\"format-buttons\" class=\"format-buttons\">
\t<button type=\"button\" class=\"button button-icon-only bbcode-b\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" onclick=\"bbstyle(0)\" title=\"";
            // line 101
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP");
            echo "\">
\t\t<i class=\"icon fa-bold fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button button-icon-only bbcode-i\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" onclick=\"bbstyle(2)\" title=\"";
            // line 104
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP");
            echo "\">
\t\t<i class=\"icon fa-italic fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button button-icon-only bbcode-u\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" onclick=\"bbstyle(4)\" title=\"";
            // line 107
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP");
            echo "\">
\t\t<i class=\"icon fa-underline fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            // line 110
            if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                // line 111
                echo "\t<button type=\"button\" class=\"button button-icon-only bbcode-quote\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" onclick=\"bbstyle(6)\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP");
                echo "\">
\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            }
            // line 115
            echo "\t<button type=\"button\" class=\"button button-icon-only bbcode-code\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" onclick=\"bbstyle(8)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP");
            echo "\">
\t\t<i class=\"icon fa-code fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button button-icon-only bbcode-list\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" onclick=\"bbstyle(10)\" title=\"";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP");
            echo "\">
\t\t<i class=\"icon fa-list fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button button-icon-only bbcode-list-\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" onclick=\"bbstyle(12)\" title=\"";
            // line 121
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP");
            echo "\">
\t\t<i class=\"icon fa-list-ol fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button button-icon-only bbcode-asterisk\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" onclick=\"bbstyle(-1)\" title=\"";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_LISTITEM_HELP");
            echo "\">
\t\t<i class=\"icon fa-asterisk fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button button-icon-only bbcode-img\" value=\"Img\" onclick=\"handle_img();\" title=\"Insert image\">
\t\t<i class=\"icon fa-image fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            // line 130
            if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                // line 131
                echo "\t<button type=\"button\" class=\"button button-icon-only bbcode-url\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP");
                echo "\">
\t\t<i class=\"icon fa-link fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            }
            // line 135
            echo "\t";
            if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
                // line 136
                echo "\t<button type=\"button\" class=\"button button-icon-only bbcode-flash\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP");
                echo "\">
\t\t<i class=\"icon fa-flash fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            }
            // line 140
            echo "\t<button type=\"button\" class=\"button button-icon-only bbcode-color\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
            echo "\" onclick=\"change_palette();\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP");
            echo "\">
\t\t<i class=\"icon fa-tint fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<select name=\"addbbcode20\" class=\"bbcode-size\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            // line 143
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 144
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 145
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_SMALL");
            echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
            // line 146
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 147
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                // line 148
                echo "\t\t\t<option value=\"150\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 149
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                    // line 150
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 152
                echo "\t\t";
            }
            // line 153
            echo "\t</select>

\t";
            // line 155
            // line 156
            echo "
\t";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", []));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 158
                echo "\t<button type=\"button\" class=\"button button-secondary bbcode-";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG_CLEAN", []);
                echo "\" name=\"addbbcode";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", []);
                echo "\" value=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", []);
                echo "\" onclick=\"bbstyle(";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", []);
                echo ")\" title=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", []);
                echo "\">
\t\t";
                // line 159
                echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", []);
                echo "
\t</button>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "</div>
";
            // line 163
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 163,  334 => 162,  325 => 159,  312 => 158,  308 => 157,  305 => 156,  304 => 155,  300 => 153,  297 => 152,  291 => 150,  289 => 149,  284 => 148,  282 => 147,  278 => 146,  274 => 145,  270 => 144,  266 => 143,  257 => 140,  249 => 136,  246 => 135,  238 => 131,  236 => 130,  227 => 124,  221 => 121,  215 => 118,  208 => 115,  200 => 111,  198 => 110,  192 => 107,  186 => 104,  180 => 101,  177 => 100,  176 => 99,  167 => 94,  163 => 92,  161 => 91,  158 => 90,  144 => 89,  76 => 24,  69 => 20,  48 => 10,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "posting_buttons.html", "");
    }
}

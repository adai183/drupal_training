<?php

/* footer.html.twig */
class __TwigTemplate_c023db2d71360e29213d3c8b2360be8ff86e5bb2cdfef7bf9b14f04e8339686f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<footer class=\"container-fluid footer footer-bottom margin-top-4 fullwidth\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <a href=\"#\"><img class=\"social\" src=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "//img/facebook.png\" alt=\"\"/></a>
            <a href=\"#\"><img class=\"social\" src=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/twitter.png\" alt=\"\"/></a>
            <span class=\"text\">
                <a href=\"cookies-policy.html\">Política de cookies</a>
            </span>
            <span class=\"text\">
                <a href=\"#\">Política de privacidad</a>
            </span>
            <span class=\"pull-right gob\">
                <img src=\"";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/fill-110.png\" alt=\"\"/>
                <span class=\"dropdown dropup\">
                    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"menu1\" data-toggle=\"dropdown\">
                        ES
                    <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu1\">
                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EN</a>
                        </li>
                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">GER</a>
                        </li>
                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">FR</a>
                        </li>
                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EUSK</a>
                        </li>
                    </ul>
                </span>
                <img src=\"";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/1-ministerio-economia-competitividad.png\" alt=\"\"/>
            </span>
        </div>
    </div>
</footer>

<footer class=\"container-fluid footer-bottom-small footer-bottom margin-top-4\" style=\"display:none;\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"margin-bottom-2\">
                <a href=\"#\"><img class=\"social\" src=\"";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/facebook.png\" alt=\"\"/></a>
                <a href=\"#\"><img class=\"social\" src=\"";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/twitter.png\" alt=\"\"/></a>
            </div>
            <div>
                <a href=\"#\">Política de cookies</a>
            </div>
            <div class=\"margin-bottom-2\">
                <a href=\"#\">Política de privacidad</a>
            </div>
            <div class=\"dropdown dropup margin-bottom-2\">
                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"menu1\" data-toggle=\"dropdown\">
                    ES
                <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu1\">
                    <li role=\"presentation\">
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EN</a>
                    </li>
                    <li role=\"presentation\">
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">GER</a>
                    </li>
                    <li role=\"presentation\">
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">FR</a>
                    </li>
                    <li role=\"presentation\">
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EUSK</a>
                    </li>
                </div>
                <div>
                    <img src=\"";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/ img/1-ministerio-economia-competitividad.png\" alt=\"\"/>
                </div>
            </span>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 73,  104 => 45,  100 => 44,  87 => 34,  63 => 13,  52 => 5,  48 => 4,  43 => 1,);
    }
}
/* <footer class="container-fluid footer footer-bottom margin-top-4 fullwidth">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <a href="#"><img class="social" src="{{ base_path  ~ directory }}//img/facebook.png" alt=""/></a>*/
/*             <a href="#"><img class="social" src="{{ base_path  ~ directory }}/img/twitter.png" alt=""/></a>*/
/*             <span class="text">*/
/*                 <a href="cookies-policy.html">Política de cookies</a>*/
/*             </span>*/
/*             <span class="text">*/
/*                 <a href="#">Política de privacidad</a>*/
/*             </span>*/
/*             <span class="pull-right gob">*/
/*                 <img src="{{ base_path  ~ directory }}/img/fill-110.png" alt=""/>*/
/*                 <span class="dropdown dropup">*/
/*                     <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">*/
/*                         ES*/
/*                     <span class="caret"></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">*/
/*                         <li role="presentation">*/
/*                             <a role="menuitem" tabindex="-1" href="#">EN</a>*/
/*                         </li>*/
/*                         <li role="presentation">*/
/*                             <a role="menuitem" tabindex="-1" href="#">GER</a>*/
/*                         </li>*/
/*                         <li role="presentation">*/
/*                             <a role="menuitem" tabindex="-1" href="#">FR</a>*/
/*                         </li>*/
/*                         <li role="presentation">*/
/*                             <a role="menuitem" tabindex="-1" href="#">EUSK</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </span>*/
/*                 <img src="{{ base_path  ~ directory }}/img/1-ministerio-economia-competitividad.png" alt=""/>*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <footer class="container-fluid footer-bottom-small footer-bottom margin-top-4" style="display:none;">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="margin-bottom-2">*/
/*                 <a href="#"><img class="social" src="{{ base_path  ~ directory }}/img/facebook.png" alt=""/></a>*/
/*                 <a href="#"><img class="social" src="{{ base_path  ~ directory }}/img/twitter.png" alt=""/></a>*/
/*             </div>*/
/*             <div>*/
/*                 <a href="#">Política de cookies</a>*/
/*             </div>*/
/*             <div class="margin-bottom-2">*/
/*                 <a href="#">Política de privacidad</a>*/
/*             </div>*/
/*             <div class="dropdown dropup margin-bottom-2">*/
/*                 <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">*/
/*                     ES*/
/*                 <span class="caret"></span>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">*/
/*                     <li role="presentation">*/
/*                         <a role="menuitem" tabindex="-1" href="#">EN</a>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <a role="menuitem" tabindex="-1" href="#">GER</a>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <a role="menuitem" tabindex="-1" href="#">FR</a>*/
/*                     </li>*/
/*                     <li role="presentation">*/
/*                         <a role="menuitem" tabindex="-1" href="#">EUSK</a>*/
/*                     </li>*/
/*                 </div>*/
/*                 <div>*/
/*                     <img src="{{ base_path  ~ directory }}/ img/1-ministerio-economia-competitividad.png" alt=""/>*/
/*                 </div>*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */

<?php

/* nav.html.twig */
class __TwigTemplate_cf6eaf143913cc3b0420e06a1a6cdf23d6259d9299c73f1a6339f23c56972d7f extends Twig_Template
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
        echo "<div class=\"container-fluid \">
        <div class=\"row pull-right nav-top\" style=\"height:40px\">
            <img src=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/fill-110.png\" alt=\"\"/>
            <span class=\"dropdown\">
                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"menu1\" data-toggle=\"dropdown\">
                    ES
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu1\">
                    <li role=\"presentation\">
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EN</a>
                    </li>
                </ul>
            </span>
        </div>
    </div>

<!-- navbar -->
<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Logo and hamburger -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
        echo "/\"><img src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/logo-cib.svg\" alt=\"logo\"/></a>
        </div>
      <!-- Menu Items -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"about\">ABOUT US</a>
                 </li>
                <li>
                    <a href=\"research\">RESEARCH</a>
                </li>
                <li>
                    <a href=\"services\">SERVICES</a>
                </li>
                 <li>
                    <a href=\"outreach\">OUTREACH</a>
                </li>
                <li>
                    <a href=\"news\">NEWS</a>
                </li>
                <li>
                    <a class=\"mcib-img\" href=\"#\">
                        <img src=\"";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/mcib.png\" alt=\"mcib\" />
                    </a>
                </li>
                <li>
                    <form class=\"navbar-form\" role=\"search\">
                        <div class=\"form-group\">
                            <input id=\"directory\" type=\"text\" class=\"form-control\" placeholder=\"directory\">
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 51,  76 => 29,  47 => 3,  43 => 1,);
    }
}
/* <div class="container-fluid ">*/
/*         <div class="row pull-right nav-top" style="height:40px">*/
/*             <img src="{{ base_path  ~ directory }}/img/fill-110.png" alt=""/>*/
/*             <span class="dropdown">*/
/*                 <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">*/
/*                     ES*/
/*                     <span class="caret"></span>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">*/
/*                     <li role="presentation">*/
/*                         <a role="menuitem" tabindex="-1" href="#">EN</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* */
/* <!-- navbar -->*/
/* <nav class="navbar navbar-default">*/
/*     <div class="container-fluid">*/
/*         <!-- Logo and hamburger -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ base_path }}/"><img src="{{ base_path  ~ directory }}/img/logo-cib.svg" alt="logo"/></a>*/
/*         </div>*/
/*       <!-- Menu Items -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li>*/
/*                     <a href="about">ABOUT US</a>*/
/*                  </li>*/
/*                 <li>*/
/*                     <a href="research">RESEARCH</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="services">SERVICES</a>*/
/*                 </li>*/
/*                  <li>*/
/*                     <a href="outreach">OUTREACH</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="news">NEWS</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="mcib-img" href="#">*/
/*                         <img src="{{ base_path  ~ directory }}/img/mcib.png" alt="mcib" />*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <form class="navbar-form" role="search">*/
/*                         <div class="form-group">*/
/*                             <input id="directory" type="text" class="form-control" placeholder="directory">*/
/*                         </div>*/
/*                     </form>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */

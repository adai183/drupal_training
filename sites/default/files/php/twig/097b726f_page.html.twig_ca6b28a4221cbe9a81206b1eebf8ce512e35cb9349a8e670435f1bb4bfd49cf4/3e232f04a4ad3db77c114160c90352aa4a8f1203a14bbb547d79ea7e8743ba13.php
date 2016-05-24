<?php

/* themes/cib/templates/page.html.twig */
class __TwigTemplate_71294e38627b501d2294fdbcbfa54d83d4df5e37c69aa85b8e28cfbdb8dffedb extends Twig_Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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
        $this->loadTemplate("nav.html.twig", "themes/cib/templates/page.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

";
        // line 5
        $this->loadTemplate("footer.html.twig", "themes/cib/templates/page.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/cib/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'nav.html.twig' %}*/
/* */
/* {{ page.content }}*/
/* */
/* {% include 'footer.html.twig' %}*/
/* */

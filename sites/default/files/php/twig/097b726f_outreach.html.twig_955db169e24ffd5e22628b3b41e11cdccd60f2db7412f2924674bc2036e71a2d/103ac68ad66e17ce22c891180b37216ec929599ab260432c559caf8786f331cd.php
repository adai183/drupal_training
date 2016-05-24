<?php

/* modules/custom_pages/templates/outreach.html.twig */
class __TwigTemplate_95fe875b404e21ce07c03f922037f3e07af64d45147ad5a694f1dd5ab3359e7a extends Twig_Template
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
        echo "<main class=\"container-fluid\">

    <div class=\"jumbotron text-center\">
        OUTREACH
    </div>

    <div class=\"row margin-bottom-3 top-link\">
        <div class=\"col-md-12\">
            <a href=\"index.html\">Home</a>  |  <a href=\"outreach.html\">Outreach</a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-3\">
                <div class=\"button-selector\">
                    <div>Courses</div>
                </div>
                <div class=\"button-selector\" style=\"margin-top: 33px;\">
                    <div>Seminars</div>
                </div>
                <div class=\"button-selector\" style=\"margin-top: 33px;\">
                    <div>Meetings</div>
                </div>
                <div class=\"button-selector\" style=\"margin-top: 33px;\">
                    <div>Symposia</div>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div id=\"datepicker\"></div>
            </div>
            <div class=\"col-md-4 calendar-dates\">
                <div class=\"title\">
                    19 JUN
                </div>
                <div class=\"subtitle active\">
                    Autophagy during development and diffrentiation
                    <p class=\"date\">
                        19-22 JUN 2016 · 12:00 am
                    </p>
                </div>
                <div class=\"subtitle\">
                    Down-regulation of DNA damage-tolerance mechanisms at
                    replication forks in Saccharomyces cerevisiae.
                    <p class=\"date\">
                        30 JUN 2016 · 12:00 am
                    </p>
                </div>
                <div class=\"subtitle\">
                    Assembly and regulation of the DNA damge checkpoint
                    <p class=\"date\">
                        30 JUN 2016 · 12:00 am
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 calendar-detail\">
            <div class=\"col-md-5 col-md-offset-3 left\">
                <div class=\"date\">
                    24 SEPT 2016 · 12:00 am
                </div>
                <div class=\"title\">
                    Place
                </div>
                <div class=\"subtitle\">
                    Salón de actos CIB
                </div>
                <div class=\"title\">
                    CIB contact
                </div>
                <div class=\"contact\">
                    <span><img src=\"";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/User.svg\" /></span>
                    <span>Boya</span>
                </div>
                <div class=\"contact\">
                    <span><img src=\"";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/User.svg\" /></span>
                    <span>Patricia</span>
                </div>
            </div>
            <div class=\"col-md-4 right\">
                <div class=\"topic\">
                    Autophagy during development and differentiation
                </div>
                <div class=\"title\">
                    Speaker
                </div>
                <div class=\"subtitle\">
                    Lorena Esteban Martínez ·  CIB CSIC
                </div>
                <div class=\"title\">
                    Department
                </div>
                <div class=\"department\">
                    <a href=\"celmolbio.html\">
                        Cellular and Mollecular Biology
                    </a>
                </div>
                <div class=\"title\">
                    Poster
                </div>
                <div class=\"poster\">
                    <a href=\"#\">
                        <img src=\"";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/print.svg\" alt=\"\" />
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 calendar-detail\">
            <div class=\"col-md-5 col-md-offset-3 left\">
                <div class=\"date\">
                    24 SEPT 2016 · 12:00 am
                </div>
                <div class=\"title\">
                    Place
                </div>
                <div class=\"subtitle\">
                    Salón de actos CIB
                </div>
                <div class=\"title\">
                    CIB contact
                </div>
                <div class=\"contact\">
                    <span><img src=\"";
        // line 128
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/User.svg\" /></span>
                    <span>Boya</span>
                </div>
                <div class=\"contact\">
                    <span><img src=\"";
        // line 132
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/User.svg\" /></span>
                    <span>Patricia</span>
                </div>
            </div>
            <div class=\"col-md-4 right\">
                <div class=\"topic\">
                    Down-regulation of DNA damage-tolerance mechanisms at
                    replication forks in Saccharomyces cerevisiae.
                </div>
                <div class=\"title\">
                    Speaker
                </div>
                <div class=\"subtitle\">
                    Lorena Esteban Martínez ·  CIB CSIC
                </div>
                <div class=\"title\">
                    Department
                </div>
                <div class=\"department\">
                    <a href=\"celmolbio.html\">
                        Cellular and Mollecular Biology
                    </a>
                </div>
                <div class=\"title\">
                    Poster
                </div>
                <div class=\"poster\">
                    <a href=\"#\">
                        <img src=\"";
        // line 160
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/print.svg\" alt=\"\" />
                    </a>
                </div>
            </div>

        </div>
    </div>


    <div class=\"row section-title\">
        <div class=\"col-md-12\">
        <span class=\"marker\"></span>
        <span>NEWS</span>
        <span class=\"pull-right\"><a href=\"#\">See more</a></span>
        </div>
    </div>
    <div class=\"row news\">
        <div class=\"col-md-4\">
            <div class=\"title\">
                <a href=\"#\">OUTREACH</a>
            </div>
            <div class=\"img\">
                <img src=\"";
        // line 182
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/home-op-2.png\" alt=\"\" />
            </div>
            <div class=\"subtitle\">
                The CIB contributes to a better understanding of the
                processes of mRNA degradation
            </div>
            <div class=\"date\">
                24 SEP 2016
            </div>
            <div class=\"footnote\">
                Chromatography Service Biological Research Center was
                established in 1988 to meet the demand of domestic or
                from other centers and institutions users.
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"title\">
                <a href=\"#\">OUTREACH</a>
            </div>
            <div class=\"img\">
                <img src=\"";
        // line 202
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/photo-1430933964450-0-aefb-85717-c-8.png\" alt=\"\" />
            </div>
            <div class=\"subtitle\">
                Identified new molecules that regulate progression
                of B-cell malignancies
            </div>
            <div class=\"date\">
                24 SEP 2016
            </div>
            <div class=\"footnote\">
                Chromatography Service Biological Research Center was
                established in 1988 to meet the demand of domestic or
                from other centers and institutions users.
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"title\">
                <a href=\"#\">OUTREACH</a>
            </div>
            <div class=\"img\">
                <img src=\"";
        // line 222
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/photo-1451186859696-371-d-9477-be-93.png\" alt=\"\" />
            </div>
            <div class=\"subtitle\">
                The CIB contributes to a better understanding
            </div>
            <div class=\"date\">
                24 SEP 2016
            </div>
            <div class=\"footnote\">
                Chromatography Service Biological Research Center was
                established in 1988.
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class=\"row section-title margin-top-10\">
        <div class=\"col-md-12 title\">
            <span class=\"marker\"></span>
            <span>LINKS OF INTEREST</span>
        </div>
    </div>
    <div class=\"row footer\">
        <div class=\"col-md-4\">
            <ul>
                <li>
                    <a href=\"#\">Sociedad Española de Biología Celular</a>
                </li>
                <li>
                    <a href=\"#\">Sociedad Española de Microbiología</a>
                </li>
                <li>
                    <a href=\"#\">Sociedad Española de Biotecnología</a>
                </li>
                <li>
                    <a href=\"#\">SECUGEN Servicio de Secuenciación DNA</a>
                </li>
                <li>
                    <a href=\"#\">Red Española de Apotosis</a>
                </li>
                <li>
                    <a href=\"#\">Grupo Español de Radicales Libres</a>
                </li>
                <li>
                    <a href=\"#\">Aku Database</a>
                </li>
                <li>
                    <a href=\"#\">Proretina Therapeutics</a>
                </li>
            </ul>
        </div>
        <div class=\"col-md-8 logos\">
            <div class=\"col-md-6\">
                <ul>
                    <li class=\"margin-bottom-5\">
                        <a href=\"#\"><img src=\"";
        // line 277
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/logo-pie-eu.png\" alt=\"\"/></a>
                    </li>
                    <li class=\"margin-bottom-5\">
                        <a href=\"#\"><img src=\"";
        // line 280
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/4-i-n-n-p-a-c-t-o-logo.png\" alt=\"\"/></a>
                    </li>
                    <li>
                        <a href=\"#\"><img src=\"";
        // line 283
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/3-logo-ce-horizontal-en-quadri-jpg.png\" alt=\"\"/></a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <ul>
                    <li class=\"margin-bottom-5\">
                        <a href=\"#\"><img src=\"";
        // line 290
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/2-madrid.png\" alt=\"\"/></a>
                    </li>
                    <li class=\"margin-bottom-5\">
                        <a href=\"#\"><img src=\"";
        // line 293
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/logo-c-d-t-i.png\" alt=\"\"/></a>
                    </li>
                    <li>
                        <a href=\"#\"><img src=\"";
        // line 296
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/logo-isciii.png\" alt=\"\"/></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</main>
";
    }

    public function getTemplateName()
    {
        return "modules/custom_pages/templates/outreach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 296,  376 => 293,  370 => 290,  360 => 283,  354 => 280,  348 => 277,  290 => 222,  267 => 202,  244 => 182,  219 => 160,  188 => 132,  181 => 128,  155 => 105,  125 => 78,  118 => 74,  43 => 1,);
    }
}
/* <main class="container-fluid">*/
/* */
/*     <div class="jumbotron text-center">*/
/*         OUTREACH*/
/*     </div>*/
/* */
/*     <div class="row margin-bottom-3 top-link">*/
/*         <div class="col-md-12">*/
/*             <a href="index.html">Home</a>  |  <a href="outreach.html">Outreach</a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="col-md-3">*/
/*                 <div class="button-selector">*/
/*                     <div>Courses</div>*/
/*                 </div>*/
/*                 <div class="button-selector" style="margin-top: 33px;">*/
/*                     <div>Seminars</div>*/
/*                 </div>*/
/*                 <div class="button-selector" style="margin-top: 33px;">*/
/*                     <div>Meetings</div>*/
/*                 </div>*/
/*                 <div class="button-selector" style="margin-top: 33px;">*/
/*                     <div>Symposia</div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <div id="datepicker"></div>*/
/*             </div>*/
/*             <div class="col-md-4 calendar-dates">*/
/*                 <div class="title">*/
/*                     19 JUN*/
/*                 </div>*/
/*                 <div class="subtitle active">*/
/*                     Autophagy during development and diffrentiation*/
/*                     <p class="date">*/
/*                         19-22 JUN 2016 · 12:00 am*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="subtitle">*/
/*                     Down-regulation of DNA damage-tolerance mechanisms at*/
/*                     replication forks in Saccharomyces cerevisiae.*/
/*                     <p class="date">*/
/*                         30 JUN 2016 · 12:00 am*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="subtitle">*/
/*                     Assembly and regulation of the DNA damge checkpoint*/
/*                     <p class="date">*/
/*                         30 JUN 2016 · 12:00 am*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12 calendar-detail">*/
/*             <div class="col-md-5 col-md-offset-3 left">*/
/*                 <div class="date">*/
/*                     24 SEPT 2016 · 12:00 am*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     Place*/
/*                 </div>*/
/*                 <div class="subtitle">*/
/*                     Salón de actos CIB*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     CIB contact*/
/*                 </div>*/
/*                 <div class="contact">*/
/*                     <span><img src="{{ base_path  ~ directory }}/img/User.svg" /></span>*/
/*                     <span>Boya</span>*/
/*                 </div>*/
/*                 <div class="contact">*/
/*                     <span><img src="{{ base_path  ~ directory }}/img/User.svg" /></span>*/
/*                     <span>Patricia</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 right">*/
/*                 <div class="topic">*/
/*                     Autophagy during development and differentiation*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     Speaker*/
/*                 </div>*/
/*                 <div class="subtitle">*/
/*                     Lorena Esteban Martínez ·  CIB CSIC*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     Department*/
/*                 </div>*/
/*                 <div class="department">*/
/*                     <a href="celmolbio.html">*/
/*                         Cellular and Mollecular Biology*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     Poster*/
/*                 </div>*/
/*                 <div class="poster">*/
/*                     <a href="#">*/
/*                         <img src="{{ base_path  ~ directory }}/img/print.svg" alt="" />*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12 calendar-detail">*/
/*             <div class="col-md-5 col-md-offset-3 left">*/
/*                 <div class="date">*/
/*                     24 SEPT 2016 · 12:00 am*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     Place*/
/*                 </div>*/
/*                 <div class="subtitle">*/
/*                     Salón de actos CIB*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     CIB contact*/
/*                 </div>*/
/*                 <div class="contact">*/
/*                     <span><img src="{{ base_path  ~ directory }}/img/User.svg" /></span>*/
/*                     <span>Boya</span>*/
/*                 </div>*/
/*                 <div class="contact">*/
/*                     <span><img src="{{ base_path  ~ directory }}/img/User.svg" /></span>*/
/*                     <span>Patricia</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 right">*/
/*                 <div class="topic">*/
/*                     Down-regulation of DNA damage-tolerance mechanisms at*/
/*                     replication forks in Saccharomyces cerevisiae.*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     Speaker*/
/*                 </div>*/
/*                 <div class="subtitle">*/
/*                     Lorena Esteban Martínez ·  CIB CSIC*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     Department*/
/*                 </div>*/
/*                 <div class="department">*/
/*                     <a href="celmolbio.html">*/
/*                         Cellular and Mollecular Biology*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="title">*/
/*                     Poster*/
/*                 </div>*/
/*                 <div class="poster">*/
/*                     <a href="#">*/
/*                         <img src="{{ base_path  ~ directory }}/img/print.svg" alt="" />*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="row section-title">*/
/*         <div class="col-md-12">*/
/*         <span class="marker"></span>*/
/*         <span>NEWS</span>*/
/*         <span class="pull-right"><a href="#">See more</a></span>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row news">*/
/*         <div class="col-md-4">*/
/*             <div class="title">*/
/*                 <a href="#">OUTREACH</a>*/
/*             </div>*/
/*             <div class="img">*/
/*                 <img src="{{ base_path  ~ directory }}/img/home-op-2.png" alt="" />*/
/*             </div>*/
/*             <div class="subtitle">*/
/*                 The CIB contributes to a better understanding of the*/
/*                 processes of mRNA degradation*/
/*             </div>*/
/*             <div class="date">*/
/*                 24 SEP 2016*/
/*             </div>*/
/*             <div class="footnote">*/
/*                 Chromatography Service Biological Research Center was*/
/*                 established in 1988 to meet the demand of domestic or*/
/*                 from other centers and institutions users.*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="title">*/
/*                 <a href="#">OUTREACH</a>*/
/*             </div>*/
/*             <div class="img">*/
/*                 <img src="{{ base_path  ~ directory }}/img/photo-1430933964450-0-aefb-85717-c-8.png" alt="" />*/
/*             </div>*/
/*             <div class="subtitle">*/
/*                 Identified new molecules that regulate progression*/
/*                 of B-cell malignancies*/
/*             </div>*/
/*             <div class="date">*/
/*                 24 SEP 2016*/
/*             </div>*/
/*             <div class="footnote">*/
/*                 Chromatography Service Biological Research Center was*/
/*                 established in 1988 to meet the demand of domestic or*/
/*                 from other centers and institutions users.*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="title">*/
/*                 <a href="#">OUTREACH</a>*/
/*             </div>*/
/*             <div class="img">*/
/*                 <img src="{{ base_path  ~ directory }}/img/photo-1451186859696-371-d-9477-be-93.png" alt="" />*/
/*             </div>*/
/*             <div class="subtitle">*/
/*                 The CIB contributes to a better understanding*/
/*             </div>*/
/*             <div class="date">*/
/*                 24 SEP 2016*/
/*             </div>*/
/*             <div class="footnote">*/
/*                 Chromatography Service Biological Research Center was*/
/*                 established in 1988.*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Footer -->*/
/*     <div class="row section-title margin-top-10">*/
/*         <div class="col-md-12 title">*/
/*             <span class="marker"></span>*/
/*             <span>LINKS OF INTEREST</span>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row footer">*/
/*         <div class="col-md-4">*/
/*             <ul>*/
/*                 <li>*/
/*                     <a href="#">Sociedad Española de Biología Celular</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Sociedad Española de Microbiología</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Sociedad Española de Biotecnología</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">SECUGEN Servicio de Secuenciación DNA</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Red Española de Apotosis</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Grupo Español de Radicales Libres</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Aku Database</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Proretina Therapeutics</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-md-8 logos">*/
/*             <div class="col-md-6">*/
/*                 <ul>*/
/*                     <li class="margin-bottom-5">*/
/*                         <a href="#"><img src="{{ base_path  ~ directory }}/img/logo-pie-eu.png" alt=""/></a>*/
/*                     </li>*/
/*                     <li class="margin-bottom-5">*/
/*                         <a href="#"><img src="{{ base_path  ~ directory }}/img/4-i-n-n-p-a-c-t-o-logo.png" alt=""/></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#"><img src="{{ base_path  ~ directory }}/img/3-logo-ce-horizontal-en-quadri-jpg.png" alt=""/></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <ul>*/
/*                     <li class="margin-bottom-5">*/
/*                         <a href="#"><img src="{{ base_path  ~ directory }}/img/2-madrid.png" alt=""/></a>*/
/*                     </li>*/
/*                     <li class="margin-bottom-5">*/
/*                         <a href="#"><img src="{{ base_path  ~ directory }}/img/logo-c-d-t-i.png" alt=""/></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#"><img src="{{ base_path  ~ directory }}/img/logo-isciii.png" alt=""/></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </main>*/
/* */

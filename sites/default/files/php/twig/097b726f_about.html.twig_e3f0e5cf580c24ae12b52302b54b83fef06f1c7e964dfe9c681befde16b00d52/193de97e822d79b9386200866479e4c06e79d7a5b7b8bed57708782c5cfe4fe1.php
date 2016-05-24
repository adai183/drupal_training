<?php

/* modules/custom_pages/templates/about.html.twig */
class __TwigTemplate_eab68ff944c3f9cb3cf85856e0b766fe2d1d845a73f84a311c3667751989388e extends Twig_Template
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

    <div class=\"jumbotron text-center about\">
        ABOUT US
    </div>

    ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "carousel", array()), "html", null, true));
        echo "

    <!-- sticky sidebar -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-3\" id=\"leftCol\">

              \t<ul class=\"nav nav-stacked\" id=\"sidebar\">
                    <li>
                        <a href=\"#sec0\">INTRO</a>
                    </li>
                    <li>
                        <a href=\"#sec1\">SCIENTIFIC REPORT</a>
                    </li>
                    <li>
                        <a href=\"#sec2\">ORGANIZATION CHART</a>
                    </li>
                    <li>
                        <a href=\"#sec4\">CONTACT</a>
                    </li>
              \t</ul>

      \t\t</div>

            <!-- Page content -->
            <div class=\"col-md-9\">
                <div id=\"sec0\" class=\"row top-link margin-bottom-3\">
                    <a href=\"index.html\">Home</a>  |  <a href=\"about.html\">About us</a>
                </div>
                <div class=\"row\">
                    <p>
                        The “Centro de Investigaciones Biológicas” (CIB) is one of
                        the research centres with greater prestige and tradition in
                        the Spanish National Research Council (CSIC), and has been
                        at the forefront of biological research since its creation
                        in 1953. The initial activity of the CIB was focused mainly
                        on studies in the fields of biology and biomedicine, but
                        currently the CIB is a multidisciplinary Centre, bringing
                        together researchers in the areas of biology, agricultural
                        sciences and chemistry. It is an active, dynamic Centre in
                        constant evolution.
                    </p>
                    <p>
                        At present the CIB is made up of approximately 560
                        professionals including staff researchers, contracted
                        researchers, scholarship and PhD students, as well as
                        other professionals dedicated to administering
                        and maintaining the Centre.
                    </p>
                    <p>
                        Its present location in the Madrid University Campus
                        in Moncloa, surrounded by the Faculties of Biology,
                        Physics, Chemistry, Pharmacy and Medicine, as well as
                        the Schools of Forestry and Agronomy, places it in a
                        unique setting for collaborating with universities and
                        participating in degree and Masters’ degree courses,
                        and the training of young scientists. In addition,
                        the CIB collaborates with different schools for the
                        training of qualified technicians. The multidisciplinary
                        character of the CIB has made it a point of reference
                        for the preparation of new scientists and technicians,
                        perfectly qualified for their inclusion in laboratories
                        of the best international institutions and enterprises.
                    </p>
                    <p>
                        Funding for research conducted in the CIB is obtained
                        from different agencies, both national and
                        international, through competitive tendering and
                        contracts with companies. Furthermore, the CIB carries
                        out an important role in the transfer of knowledge,
                        placing at the disposal of society the results of its
                        scientific research through the generation of patents
                        that reflect the achievements of the CIB in different
                        fields, such as the design of new therapeutic
                        approaches, vaccines, biological tests or procedures
                        for biotechnological or industrial development.
                        Moreover, the CIB has created two technology-based
                        spin-off companies to foster the technological
                        development of this research.
                    </p>
                    <img class=\"img-responsive\" src=\"";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/building.png\">
                    <p>
                        CENTRO DE INVESTIGACIONES BIOLÓGICAS
                    </p>
                    <p class=\"margin-top-5\">
                        All these studies are part of five major research
                        programmes organised around five departments:
                    </p>
                    <ul>
                        <li>Environmental Biology. It advances the
                            understanding on how living organisms interact and
                            respond to the environment, including studies on
                            plants and their abiotic and biotic milieu,
                            management of insect pest populations or the use
                            of microorganisms and their enzymes for the
                            sustainable development of industrial and
                            environmental applications.
                        </li>
                        <li>
                            Cellular and Molecular Biology. It attends two
                            different and complementary aspects concerning the
                            identity and regulation of prokaryotic or
                            eukaryotic cells:
                            <ul style=\"list-style: none;\">
                                <li>
                                    i) Molecular basis of cell development and its
                                    integration in specialized cell types,
                                    tissues and organs and
                                </li>
                                <li>
                                    ii) synthetic approximations “bottom-up” for the
                                    design and microproduction of new cell
                                    components with new functionality.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Cellular and Molecular Biology. It attends two
                            different and complementary aspects concerning the
                            identity and regulation of prokaryotic or eukaryotic
                            cells:
                            <ul style=\"list-style: none;\">
                                <li>
                                    i) Molecular basis of cell development
                                    and its integration in specialized cell
                                    types, tissues and organs and
                                </li>
                                <li>
                                    ii) synthetic approximations “bottom-up”
                                    for the design and microproduction of new
                                    cell components with new functionality.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Cellular and Molecular Biology. It attends two
                            different and complementary aspects concerning the
                            identity and regulation of prokaryotic or eukaryotic
                            cells:
                            <ul style=\"list-style: none;\">
                                <li>
                                    i) Molecular basis of cell development and
                                    its integration in specialized cell types,
                                    tissues and organs and
                                </li>
                                <li>
                                    ii)synthetic approximations “bottom-up” for
                                    the design and microproduction of new cell
                                    components with new functionality.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Chemical and Physical Biology. Its main research
                            goal isto develop a quantitative understanding of
                            specific biological problems at different levels of
                            complexity through the physics and chemistry of
                            proteins and other biological molecules, to predict
                            essential biological functions and to design
                            biomedical and/or biotechnological applications.
                        </li>
                        <li>
                            Cellular and Molecular Medicine. Its purpose is to
                            understand the molecular mechanisms involved in human
                            physiopathology, rare or common illnesses with high
                            social impact, to develop strategies to design new
                            therapies on the basis of genetic, cellular and
                            structural studies.
                        </li>
                        <li>
                            Molecular Microbiology and Infection Biology. It studies
                            the characterization of the molecular processes that
                            control the life cycle and functions of microorganisms,
                            as well as the molecular mechanisms involved in the
                            regulation of microorganism-host interactions.
                            The CIB is equipped with a large number of specialized
                            scientific services (animal facility, flow cytometry,
                            cellular cultures, gas chromatography, electronic and
                            confocal microscopy, DNA and peptide sequencing,
                            proteomics, nuclear magnetic resonance of biomolecules,
                            peptide or oligonucleotide synthesis and analytical
                            ultracentrifugalisation) with highly qualified
                            personnel, that besides serving researchers of this
                            centre and the CSIC are also available to other research
                            centres (public or private) universities, and companies.
                            We can also count on an excellent library, with one of
                            the most important bibliographical collections in Europe
                            in the area of cellular biology and biomedicine,
                            together with a network of research support services
                            that includes administration, management, sterilization,
                            computer science and radiological protection along with
                            the technical service and infrastructure unit.
                        </li>
                    </ul>
                    <p>
                        The multi-disciplinary character of our Centre is one
                        of its great assets, facilitating the integration of
                        different methodologies and experimental approaches at
                        a time when it has become clear that, given their
                        complexity, biological processes can only be understood
                        through such distinct complementary approaches...
                        However, under present circumstances this asset has
                        become a challenge, since maintaining competitiveness
                        in very diverse technical and scientific areas requires
                        a constant adaptation to new technological advances and
                        a continual renewal and modernization of highly technical
                        equipment. Despite the difficult current situation,
                        with important reductions in funding, the CIB can count
                        on a large number of professionals who are experts in
                        very diverse fields, who are committed to facing the
                        present and future challenges together so that the CIB
                        can continue to be an important reference centre both
                        nationally and internationally.<br>
                        María Jesús Martínez Hernández.<br>
                        March 2013
                    </p>
                </div>

                <div id=\"sec1\" class=\"row section-title\">
                    <span class=\"marker\"></span>
                    <span>SCIENTIFIC REPORT</span>
                </div>
                <div class=\"row margin-top-2 scientific-report\">
                    <a href=\"#\">
                        <img src=\"";
        // line 231
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/folder.svg\" alt=\"\"/>
                    </a>
                    <span style=\"margin-left:10px;\">Scientific Report 2013 - 2014</span>
                </div>

                <div id=\"sec2\" class=\"row section-title\">
                    <span class=\"marker\"></span>
                    <span>ORGANIZATION CHART</span>
                </div>
                <div class=\"row\">
                    <canvas id=\"myCanvas\" class=\"img-responsive\" width=\"1000\" height=\"900\" />
                </div>

                <div id=\"sec3\" class=\"row section-title\">
                    <span class=\"marker\"></span>
                    <span>FACILITIES</span>
                </div>
                <div class=\"row facilities\">
                    <div class=\"col-md-4 general-info\">
                        <div class=\"title\">
                            Teléfono
                        </div>
                        <div class=\"subtitle\">
                            +34 91 837 31 12
                        </div>
                        <div class=\"title fax\">
                            Fax
                        </div>
                        <div class=\"subtitle\">
                            +34 91 536 04 32
                        </div>
                    </div>
                    <div class=\"col-md-6 individual-info\">
                        <div class=\"dropdown\">
                            <button class=\"btn btn-default dropdown-toggle \" type=\"button\" id=\"menu1\" data-toggle=\"dropdown\">
                                <span class=\"text\">Ultracentrifugación Analítica</span>
                                <span class=\"caret pull-right\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu1\">
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Ultracentrifugación Analítica</a>
                                </li>
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Ultracentrifugación Analítica</a>
                                </li>
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Ultracentrifugación Analítica</a>
                                </li>
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Ultracentrifugación Analítica</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"info\">
                            <div class=\"extension\">
                                <div class=\"title\">Extension</div>
                                <div class=\"subtitle\">4448 / 4333/ 35 / 45</div>
                            </div>
                            <div class=\"phone\">
                                <div class=\"title\">Direct phone</div>
                                <div class=\"subtitle\">+34 91 536 04 32</div>
                            </div>
                            <div class=\"fax\">
                                <div class=\"title\">Fax</div>
                                <div class=\"subtitle\">+34 91 536 04 32</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id=\"sec4\" class=\"row margin-top-7 margin-bottom-5\">
        <div class=\"col-md-12 map\">
            <img class=\"img-responsive map-img\" src=\"";
        // line 307
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/map1.png\"  />
            <img class=\"img-responsive map-img-direction\" src=\"";
        // line 308
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/map2.png\" style=\"display: none;\"  />
            <img class=\"img-responsive map-img-medium\" src=\"";
        // line 309
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/map5.png\"  />
            <img class=\"img-responsive map-img-direction-medium\" src=\"";
        // line 310
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/map6.png\" style=\"display: none;\" />
            <img class=\"img-responsive map-img-small\" src=\"";
        // line 311
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/map3.png\"  />
            <img class=\"img-responsive map-img-direction-small\" src=\"";
        // line 312
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/map4.png\" style=\"display: none;\" />
            <div class=\"map-window\">
                <div class=\"title\">
                    <span class=\"marker\"></span>CIB
                </div>
                <div class=\"address\">
                    C/ Ramiro de Maeztu 9
                </div>
                <div class=\"address-2\">
                    28040 · Madrid
                </div>
                <div class=\"direction\">
                    <span>HOW TO FIND US</span>
                    <span class=\"direction-marker\"><img src=\"";
        // line 325
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/flecha.svg\" alt=\"\" /></span>
                </div>
                <div class=\"phone\">
                    <span>TELEFONE</span>
                    <span class=\"number\">+34 91 837 31 12</span>
                </div>
                <div class=\"fax\">
                    <span>FAX</span>
                    <span class=\"number\">+34 91 536 04 32</span>
                </div>
            </div>
            <div class=\"map-window direction-window\">
                <div class=\"title-direction\">
                    <span>HOW TO FIND US</span>
                </div>
                <div class=\"autobus\">
                    Bus
                </div>
                <div class=\"line\">
                    132-F
                </div>
                <div class=\"line-color\">
                    <img src=\"";
        // line 347
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/azul.svg\" alt=\"\" />
                </div>
                <div class=\"metro\">
                    Metro
                </div>
                <div class=\"line\">
                    Metropolitano
                </div>
                <div class=\"line-color\">
                    <img src=\"";
        // line 356
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/rojo.svg\" alt=\"\" />
                </div>
                <div class=\"direction margin-top-1\">
                    <span>GO BACK TO CONTACT</span>
                    <span class=\"direction-marker\"><img src=\"";
        // line 360
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/flecha.svg\" alt=\"\" /></span>
                </div>

            </div>
        </div>
    </div>

</main>
";
    }

    public function getTemplateName()
    {
        return "modules/custom_pages/templates/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 360,  433 => 356,  421 => 347,  396 => 325,  380 => 312,  376 => 311,  372 => 310,  368 => 309,  364 => 308,  360 => 307,  281 => 231,  134 => 87,  51 => 7,  43 => 1,);
    }
}
/* <main class="container-fluid">*/
/* */
/*     <div class="jumbotron text-center about">*/
/*         ABOUT US*/
/*     </div>*/
/* */
/*     {{ page.carousel }}*/
/* */
/*     <!-- sticky sidebar -->*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="col-md-3" id="leftCol">*/
/* */
/*               	<ul class="nav nav-stacked" id="sidebar">*/
/*                     <li>*/
/*                         <a href="#sec0">INTRO</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#sec1">SCIENTIFIC REPORT</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#sec2">ORGANIZATION CHART</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#sec4">CONTACT</a>*/
/*                     </li>*/
/*               	</ul>*/
/* */
/*       		</div>*/
/* */
/*             <!-- Page content -->*/
/*             <div class="col-md-9">*/
/*                 <div id="sec0" class="row top-link margin-bottom-3">*/
/*                     <a href="index.html">Home</a>  |  <a href="about.html">About us</a>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <p>*/
/*                         The “Centro de Investigaciones Biológicas” (CIB) is one of*/
/*                         the research centres with greater prestige and tradition in*/
/*                         the Spanish National Research Council (CSIC), and has been*/
/*                         at the forefront of biological research since its creation*/
/*                         in 1953. The initial activity of the CIB was focused mainly*/
/*                         on studies in the fields of biology and biomedicine, but*/
/*                         currently the CIB is a multidisciplinary Centre, bringing*/
/*                         together researchers in the areas of biology, agricultural*/
/*                         sciences and chemistry. It is an active, dynamic Centre in*/
/*                         constant evolution.*/
/*                     </p>*/
/*                     <p>*/
/*                         At present the CIB is made up of approximately 560*/
/*                         professionals including staff researchers, contracted*/
/*                         researchers, scholarship and PhD students, as well as*/
/*                         other professionals dedicated to administering*/
/*                         and maintaining the Centre.*/
/*                     </p>*/
/*                     <p>*/
/*                         Its present location in the Madrid University Campus*/
/*                         in Moncloa, surrounded by the Faculties of Biology,*/
/*                         Physics, Chemistry, Pharmacy and Medicine, as well as*/
/*                         the Schools of Forestry and Agronomy, places it in a*/
/*                         unique setting for collaborating with universities and*/
/*                         participating in degree and Masters’ degree courses,*/
/*                         and the training of young scientists. In addition,*/
/*                         the CIB collaborates with different schools for the*/
/*                         training of qualified technicians. The multidisciplinary*/
/*                         character of the CIB has made it a point of reference*/
/*                         for the preparation of new scientists and technicians,*/
/*                         perfectly qualified for their inclusion in laboratories*/
/*                         of the best international institutions and enterprises.*/
/*                     </p>*/
/*                     <p>*/
/*                         Funding for research conducted in the CIB is obtained*/
/*                         from different agencies, both national and*/
/*                         international, through competitive tendering and*/
/*                         contracts with companies. Furthermore, the CIB carries*/
/*                         out an important role in the transfer of knowledge,*/
/*                         placing at the disposal of society the results of its*/
/*                         scientific research through the generation of patents*/
/*                         that reflect the achievements of the CIB in different*/
/*                         fields, such as the design of new therapeutic*/
/*                         approaches, vaccines, biological tests or procedures*/
/*                         for biotechnological or industrial development.*/
/*                         Moreover, the CIB has created two technology-based*/
/*                         spin-off companies to foster the technological*/
/*                         development of this research.*/
/*                     </p>*/
/*                     <img class="img-responsive" src="{{ base_path  ~ directory }}/img/building.png">*/
/*                     <p>*/
/*                         CENTRO DE INVESTIGACIONES BIOLÓGICAS*/
/*                     </p>*/
/*                     <p class="margin-top-5">*/
/*                         All these studies are part of five major research*/
/*                         programmes organised around five departments:*/
/*                     </p>*/
/*                     <ul>*/
/*                         <li>Environmental Biology. It advances the*/
/*                             understanding on how living organisms interact and*/
/*                             respond to the environment, including studies on*/
/*                             plants and their abiotic and biotic milieu,*/
/*                             management of insect pest populations or the use*/
/*                             of microorganisms and their enzymes for the*/
/*                             sustainable development of industrial and*/
/*                             environmental applications.*/
/*                         </li>*/
/*                         <li>*/
/*                             Cellular and Molecular Biology. It attends two*/
/*                             different and complementary aspects concerning the*/
/*                             identity and regulation of prokaryotic or*/
/*                             eukaryotic cells:*/
/*                             <ul style="list-style: none;">*/
/*                                 <li>*/
/*                                     i) Molecular basis of cell development and its*/
/*                                     integration in specialized cell types,*/
/*                                     tissues and organs and*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     ii) synthetic approximations “bottom-up” for the*/
/*                                     design and microproduction of new cell*/
/*                                     components with new functionality.*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             Cellular and Molecular Biology. It attends two*/
/*                             different and complementary aspects concerning the*/
/*                             identity and regulation of prokaryotic or eukaryotic*/
/*                             cells:*/
/*                             <ul style="list-style: none;">*/
/*                                 <li>*/
/*                                     i) Molecular basis of cell development*/
/*                                     and its integration in specialized cell*/
/*                                     types, tissues and organs and*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     ii) synthetic approximations “bottom-up”*/
/*                                     for the design and microproduction of new*/
/*                                     cell components with new functionality.*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             Cellular and Molecular Biology. It attends two*/
/*                             different and complementary aspects concerning the*/
/*                             identity and regulation of prokaryotic or eukaryotic*/
/*                             cells:*/
/*                             <ul style="list-style: none;">*/
/*                                 <li>*/
/*                                     i) Molecular basis of cell development and*/
/*                                     its integration in specialized cell types,*/
/*                                     tissues and organs and*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     ii)synthetic approximations “bottom-up” for*/
/*                                     the design and microproduction of new cell*/
/*                                     components with new functionality.*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             Chemical and Physical Biology. Its main research*/
/*                             goal isto develop a quantitative understanding of*/
/*                             specific biological problems at different levels of*/
/*                             complexity through the physics and chemistry of*/
/*                             proteins and other biological molecules, to predict*/
/*                             essential biological functions and to design*/
/*                             biomedical and/or biotechnological applications.*/
/*                         </li>*/
/*                         <li>*/
/*                             Cellular and Molecular Medicine. Its purpose is to*/
/*                             understand the molecular mechanisms involved in human*/
/*                             physiopathology, rare or common illnesses with high*/
/*                             social impact, to develop strategies to design new*/
/*                             therapies on the basis of genetic, cellular and*/
/*                             structural studies.*/
/*                         </li>*/
/*                         <li>*/
/*                             Molecular Microbiology and Infection Biology. It studies*/
/*                             the characterization of the molecular processes that*/
/*                             control the life cycle and functions of microorganisms,*/
/*                             as well as the molecular mechanisms involved in the*/
/*                             regulation of microorganism-host interactions.*/
/*                             The CIB is equipped with a large number of specialized*/
/*                             scientific services (animal facility, flow cytometry,*/
/*                             cellular cultures, gas chromatography, electronic and*/
/*                             confocal microscopy, DNA and peptide sequencing,*/
/*                             proteomics, nuclear magnetic resonance of biomolecules,*/
/*                             peptide or oligonucleotide synthesis and analytical*/
/*                             ultracentrifugalisation) with highly qualified*/
/*                             personnel, that besides serving researchers of this*/
/*                             centre and the CSIC are also available to other research*/
/*                             centres (public or private) universities, and companies.*/
/*                             We can also count on an excellent library, with one of*/
/*                             the most important bibliographical collections in Europe*/
/*                             in the area of cellular biology and biomedicine,*/
/*                             together with a network of research support services*/
/*                             that includes administration, management, sterilization,*/
/*                             computer science and radiological protection along with*/
/*                             the technical service and infrastructure unit.*/
/*                         </li>*/
/*                     </ul>*/
/*                     <p>*/
/*                         The multi-disciplinary character of our Centre is one*/
/*                         of its great assets, facilitating the integration of*/
/*                         different methodologies and experimental approaches at*/
/*                         a time when it has become clear that, given their*/
/*                         complexity, biological processes can only be understood*/
/*                         through such distinct complementary approaches...*/
/*                         However, under present circumstances this asset has*/
/*                         become a challenge, since maintaining competitiveness*/
/*                         in very diverse technical and scientific areas requires*/
/*                         a constant adaptation to new technological advances and*/
/*                         a continual renewal and modernization of highly technical*/
/*                         equipment. Despite the difficult current situation,*/
/*                         with important reductions in funding, the CIB can count*/
/*                         on a large number of professionals who are experts in*/
/*                         very diverse fields, who are committed to facing the*/
/*                         present and future challenges together so that the CIB*/
/*                         can continue to be an important reference centre both*/
/*                         nationally and internationally.<br>*/
/*                         María Jesús Martínez Hernández.<br>*/
/*                         March 2013*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div id="sec1" class="row section-title">*/
/*                     <span class="marker"></span>*/
/*                     <span>SCIENTIFIC REPORT</span>*/
/*                 </div>*/
/*                 <div class="row margin-top-2 scientific-report">*/
/*                     <a href="#">*/
/*                         <img src="{{ base_path  ~ directory }}/img/folder.svg" alt=""/>*/
/*                     </a>*/
/*                     <span style="margin-left:10px;">Scientific Report 2013 - 2014</span>*/
/*                 </div>*/
/* */
/*                 <div id="sec2" class="row section-title">*/
/*                     <span class="marker"></span>*/
/*                     <span>ORGANIZATION CHART</span>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <canvas id="myCanvas" class="img-responsive" width="1000" height="900" />*/
/*                 </div>*/
/* */
/*                 <div id="sec3" class="row section-title">*/
/*                     <span class="marker"></span>*/
/*                     <span>FACILITIES</span>*/
/*                 </div>*/
/*                 <div class="row facilities">*/
/*                     <div class="col-md-4 general-info">*/
/*                         <div class="title">*/
/*                             Teléfono*/
/*                         </div>*/
/*                         <div class="subtitle">*/
/*                             +34 91 837 31 12*/
/*                         </div>*/
/*                         <div class="title fax">*/
/*                             Fax*/
/*                         </div>*/
/*                         <div class="subtitle">*/
/*                             +34 91 536 04 32*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-6 individual-info">*/
/*                         <div class="dropdown">*/
/*                             <button class="btn btn-default dropdown-toggle " type="button" id="menu1" data-toggle="dropdown">*/
/*                                 <span class="text">Ultracentrifugación Analítica</span>*/
/*                                 <span class="caret pull-right"></span>*/
/*                             </button>*/
/*                             <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">*/
/*                                 <li role="presentation">*/
/*                                     <a role="menuitem" tabindex="-1" href="#">Ultracentrifugación Analítica</a>*/
/*                                 </li>*/
/*                                 <li role="presentation">*/
/*                                     <a role="menuitem" tabindex="-1" href="#">Ultracentrifugación Analítica</a>*/
/*                                 </li>*/
/*                                 <li role="presentation">*/
/*                                     <a role="menuitem" tabindex="-1" href="#">Ultracentrifugación Analítica</a>*/
/*                                 </li>*/
/*                                 <li role="presentation">*/
/*                                     <a role="menuitem" tabindex="-1" href="#">Ultracentrifugación Analítica</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="info">*/
/*                             <div class="extension">*/
/*                                 <div class="title">Extension</div>*/
/*                                 <div class="subtitle">4448 / 4333/ 35 / 45</div>*/
/*                             </div>*/
/*                             <div class="phone">*/
/*                                 <div class="title">Direct phone</div>*/
/*                                 <div class="subtitle">+34 91 536 04 32</div>*/
/*                             </div>*/
/*                             <div class="fax">*/
/*                                 <div class="title">Fax</div>*/
/*                                 <div class="subtitle">+34 91 536 04 32</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="sec4" class="row margin-top-7 margin-bottom-5">*/
/*         <div class="col-md-12 map">*/
/*             <img class="img-responsive map-img" src="{{ base_path  ~ directory }}/img/map1.png"  />*/
/*             <img class="img-responsive map-img-direction" src="{{ base_path  ~ directory }}/img/map2.png" style="display: none;"  />*/
/*             <img class="img-responsive map-img-medium" src="{{ base_path  ~ directory }}/img/map5.png"  />*/
/*             <img class="img-responsive map-img-direction-medium" src="{{ base_path  ~ directory }}/img/map6.png" style="display: none;" />*/
/*             <img class="img-responsive map-img-small" src="{{ base_path  ~ directory }}/img/map3.png"  />*/
/*             <img class="img-responsive map-img-direction-small" src="{{ base_path  ~ directory }}/img/map4.png" style="display: none;" />*/
/*             <div class="map-window">*/
/*                 <div class="title">*/
/*                     <span class="marker"></span>CIB*/
/*                 </div>*/
/*                 <div class="address">*/
/*                     C/ Ramiro de Maeztu 9*/
/*                 </div>*/
/*                 <div class="address-2">*/
/*                     28040 · Madrid*/
/*                 </div>*/
/*                 <div class="direction">*/
/*                     <span>HOW TO FIND US</span>*/
/*                     <span class="direction-marker"><img src="{{ base_path  ~ directory }}/img/flecha.svg" alt="" /></span>*/
/*                 </div>*/
/*                 <div class="phone">*/
/*                     <span>TELEFONE</span>*/
/*                     <span class="number">+34 91 837 31 12</span>*/
/*                 </div>*/
/*                 <div class="fax">*/
/*                     <span>FAX</span>*/
/*                     <span class="number">+34 91 536 04 32</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="map-window direction-window">*/
/*                 <div class="title-direction">*/
/*                     <span>HOW TO FIND US</span>*/
/*                 </div>*/
/*                 <div class="autobus">*/
/*                     Bus*/
/*                 </div>*/
/*                 <div class="line">*/
/*                     132-F*/
/*                 </div>*/
/*                 <div class="line-color">*/
/*                     <img src="{{ base_path  ~ directory }}/img/azul.svg" alt="" />*/
/*                 </div>*/
/*                 <div class="metro">*/
/*                     Metro*/
/*                 </div>*/
/*                 <div class="line">*/
/*                     Metropolitano*/
/*                 </div>*/
/*                 <div class="line-color">*/
/*                     <img src="{{ base_path  ~ directory }}/img/rojo.svg" alt="" />*/
/*                 </div>*/
/*                 <div class="direction margin-top-1">*/
/*                     <span>GO BACK TO CONTACT</span>*/
/*                     <span class="direction-marker"><img src="{{ base_path  ~ directory }}/img/flecha.svg" alt="" /></span>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </main>*/
/* */

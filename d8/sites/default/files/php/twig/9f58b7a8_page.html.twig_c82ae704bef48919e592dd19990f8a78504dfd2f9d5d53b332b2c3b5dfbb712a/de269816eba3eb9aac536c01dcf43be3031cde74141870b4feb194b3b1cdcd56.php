<?php

/* themes/custom/cmp3/templates/page.html.twig */
class __TwigTemplate_a74b9cd49abfdd2aa6a8fa52505ad2298f2a58d9373e6ed742c0968bd775021b extends Twig_Template
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
        echo "<div class=\"header-container\">
    <div class=\"header\">
        
    </div>
    <header class=\"wrapper clearfix\">
        ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    </header>
</div>
<div class=\"main-container\">
    <div class=\"main wrapper clearfix\">
        ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        <aside>
            ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
        echo "
        </aside>
    </div>
</div> 
<div class=\"footer-container\">
    <footer class=\"wrapper\">
        ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/cmp3/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  63 => 13,  58 => 11,  50 => 6,  43 => 1,);
    }
}
/* <div class="header-container">*/
/*     <div class="header">*/
/*         */
/*     </div>*/
/*     <header class="wrapper clearfix">*/
/*         {{page.header}}*/
/*     </header>*/
/* </div>*/
/* <div class="main-container">*/
/*     <div class="main wrapper clearfix">*/
/*         {{page.content}}*/
/*         <aside>*/
/*             {{page.sidebar}}*/
/*         </aside>*/
/*     </div>*/
/* </div> */
/* <div class="footer-container">*/
/*     <footer class="wrapper">*/
/*         {{page.footer}}*/
/*     </footer>*/
/* </div>*/

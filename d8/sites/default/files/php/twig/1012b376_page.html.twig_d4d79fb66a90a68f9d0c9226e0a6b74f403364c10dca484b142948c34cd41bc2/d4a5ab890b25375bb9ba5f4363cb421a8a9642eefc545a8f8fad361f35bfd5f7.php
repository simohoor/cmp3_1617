<?php

/* themes/custom/cmp3/templates/page.html.twig */
class __TwigTemplate_e39795b8b51bcf686a8d13fc0a7445f1c5b5af8f575fbb303c5a78e11d3e37ca extends Twig_Template
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
    <header class=\"wrapper clearfix\">
        <nav>
            <ul>
                <li>";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "</li>
            </ul>
        </nav>    
    </header>
</div>
<div class=\"main-container\">
    <div class=\"main wrapper clearfix\">
    <br>
        <aside>
            ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
        echo "
        </aside>  
    <br>    
    <article>
        ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </article>    
          
    </div>
</div> 
<div class=\"footer-container\">
    <footer class=\"wrapper\">
        ";
        // line 25
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
        return array (  78 => 25,  68 => 18,  61 => 14,  49 => 5,  43 => 1,);
    }
}
/* <div class="header-container">*/
/*     <header class="wrapper clearfix">*/
/*         <nav>*/
/*             <ul>*/
/*                 <li>{{ page.header }}</li>*/
/*             </ul>*/
/*         </nav>    */
/*     </header>*/
/* </div>*/
/* <div class="main-container">*/
/*     <div class="main wrapper clearfix">*/
/*     <br>*/
/*         <aside>*/
/*             {{ page.sidebar }}*/
/*         </aside>  */
/*     <br>    */
/*     <article>*/
/*         {{ page.content }}*/
/*     </article>    */
/*           */
/*     </div>*/
/* </div> */
/* <div class="footer-container">*/
/*     <footer class="wrapper">*/
/*         {{ page.footer }}*/
/*     </footer>*/
/* </div>*/

<?php

/* modules/yamlform/templates/yamlform-progress.html.twig */
class __TwigTemplate_07f0bdea64532eb67f416f863200386e536354e530a85ea4563464663ab4c71d extends Twig_Template
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
        $tags = array("if" => 25);
        $filters = array();
        $functions = array("attach_library" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("yamlform/yamlform.progress"), "html", null, true));
        echo "

<div class=\"yamlform-progress\">

  ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bar"]) ? $context["bar"] : null), "html", null, true));
        echo "

  ";
        // line 25
        if (((isset($context["pages"]) ? $context["pages"] : null) || (isset($context["percentage"]) ? $context["percentage"] : null))) {
            // line 26
            echo "    <div class=\"yamlform-progress__status\">
      ";
            // line 27
            if ((isset($context["pages"]) ? $context["pages"] : null)) {
                // line 28
                echo "        <span class=\"yamlform-progress__pages\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true));
                echo "</span>
        ";
                // line 29
                if ((isset($context["percentage"]) ? $context["percentage"] : null)) {
                    // line 30
                    echo "          <span class=\"yamlform-progress__percentage\">(";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["percentage"]) ? $context["percentage"] : null), "html", null, true));
                    echo ")</span>
        ";
                }
                // line 32
                echo "      ";
            } else {
                // line 33
                echo "        <span class=\"yamlform-progress__percentage\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["percentage"]) ? $context["percentage"] : null), "html", null, true));
                echo "</span>
      ";
            }
            // line 35
            echo "    </div>
  ";
        }
        // line 37
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-progress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 37,  84 => 35,  78 => 33,  75 => 32,  69 => 30,  67 => 29,  62 => 28,  60 => 27,  57 => 26,  55 => 25,  50 => 23,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation from form wizard progress.*/
/*  **/
/*  * Available variables:*/
/*  * - yamlform: A form.*/
/*  * - pages: Array of wizard pages.*/
/*  * - current_page: Current wizard page.*/
/*  * - total_pages: Current wizard page.*/
/*  * - percentage: Percentage completed.*/
/*  * - bar: A progress bar.*/
/*  **/
/*  * @see template_preprocess_yamlform_progress()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('yamlform/yamlform.progress') }}*/
/* */
/* <div class="yamlform-progress">*/
/* */
/*   {{ bar }}*/
/* */
/*   {% if pages or percentage %}*/
/*     <div class="yamlform-progress__status">*/
/*       {% if pages %}*/
/*         <span class="yamlform-progress__pages">{{ pages }}</span>*/
/*         {% if percentage %}*/
/*           <span class="yamlform-progress__percentage">({{ percentage }})</span>*/
/*         {% endif %}*/
/*       {% else %}*/
/*         <span class="yamlform-progress__percentage">{{ percentage }}</span>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */

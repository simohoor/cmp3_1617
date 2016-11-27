<?php

/* modules/yamlform/templates/yamlform-actions.html.twig */
class __TwigTemplate_099be5972899a2cf0684ef383d10248b97fbade40fd58d95738e068e23c30a11 extends Twig_Template
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

        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["draft"]) ? $context["draft"] : null), "html", null, true));
        echo "
";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["previous"]) ? $context["previous"] : null), "html", null, true));
        echo "
";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true));
        echo "
";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submit"]) ? $context["submit"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  51 => 15,  47 => 14,  43 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a form actions.*/
/*  **/
/*  * @see template_preprocess_yamlform_actions()*/
/*  * @see \Drupal\yamlform\YamlFormSubmissionForm::actionsElement*/
/*  * @see \Drupal\yamlform\YamlFormSubmissionForm::actions*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ draft }}*/
/* {{ previous }}*/
/* {{ next }}*/
/* {{ submit }}*/
/* */

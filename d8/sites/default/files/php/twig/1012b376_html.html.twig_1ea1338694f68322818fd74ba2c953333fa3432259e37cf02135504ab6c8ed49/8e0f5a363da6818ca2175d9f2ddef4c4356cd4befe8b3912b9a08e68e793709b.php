<?php

/* themes/custom/cmp3/templates/html.html.twig */
class __TwigTemplate_24c5b94d52f409f40f9118cc3e2caaf0bfc341d190417971ecfb951cff38093f extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title></title>
        <css-placeholder token=\"";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
        <js-placeholder token=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Oswald\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Abel\" rel=\"stylesheet\">


    </head>
    <body>
         ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "

        

        
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cmp3/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  55 => 8,  51 => 7,  43 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*         <title></title>*/
/*         <css-placeholder token="{{ placeholder_token }}">*/
/*         <js-placeholder token="{{ placeholder_token }}">*/
/*         <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">*/
/*         <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">*/
/* */
/* */
/*     </head>*/
/*     <body>*/
/*          {{page}}*/
/* */
/*         */
/* */
/*         */
/*     </body>*/
/* </html>*/
/* */

<?php

/* modules/yamlform/templates/yamlform-progress-bar.html.twig */
class __TwigTemplate_1f91d21efdf74cea76d071f7e6c580357e2ee731880735205be23a5fedb87aad extends Twig_Template
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
        $tags = array("if" => 19, "for" => 21, "set" => 22);
        $filters = array("length" => 19);
        $functions = array("attach_library" => 17);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('length'),
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

        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("yamlform/yamlform.progress.bar"), "html", null, true));
        echo "

";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null)) < (isset($context["max_pages"]) ? $context["max_pages"] : null))) {
            // line 20
            echo "<ol class=\"yamlform-progress-bar\" data-steps=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_length_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null)), "html", null, true));
            echo "\">
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["index"] => $context["title"]) {
                // line 22
                $context["classes"] = array(0 => "yamlform-progress-bar__page", 1 => (((                // line 24
$context["index"] < (isset($context["current_page"]) ? $context["current_page"] : null))) ? ("yamlform-progress-bar__page--done") : ("")), 2 => (((                // line 25
$context["index"] == (isset($context["current_page"]) ? $context["current_page"] : null))) ? ("yamlform-progress-bar__page--current") : ("")));
                // line 27
                echo "<li";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "class", 1 => ""), "method"), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo ">
  <b>";
                // line 28
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["title"], "html", null, true));
                echo "</b>";
                if (($this->getAttribute($context["loop"], "first", array()) || $this->getAttribute($context["loop"], "last", array()))) {
                    echo "<span></span>";
                }
                // line 29
                echo "</li>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "</ol>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/yamlform/templates/yamlform-progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  87 => 29,  81 => 28,  76 => 27,  74 => 25,  73 => 24,  72 => 22,  55 => 21,  50 => 20,  48 => 19,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation from form wizard progress bar.*/
/*  **/
/*  * Available variables:*/
/*  * - yamlform: A form.*/
/*  * - pages: Array of wizard pages.*/
/*  * - current_page: Current wizard page.*/
/*  * - max_pages: Maximum number of pages to be displayed.*/
/*  **/
/*  * @see template_preprocess_yamlform_progress_bar()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('yamlform/yamlform.progress.bar') }}*/
/* */
/* {% if pages|length < max_pages %}*/
/* <ol class="yamlform-progress-bar" data-steps="{{ pages|length }}">*/
/* {% for index, title in pages %}{%*/
/*   set classes = [*/
/*     'yamlform-progress-bar__page',*/
/*     index < current_page ? 'yamlform-progress-bar__page--done',*/
/*     index == current_page ? 'yamlform-progress-bar__page--current',*/
/*   ]*/
/* %}<li{{ attributes.setAttribute('class', '').addClass(classes) }}>*/
/*   <b>{{ title }}</b>{% if (loop.first	or loop.last) %}<span></span>{% endif %}*/
/* </li>{% endfor %}*/
/* </ol>*/
/* {% endif %}*/
/* */

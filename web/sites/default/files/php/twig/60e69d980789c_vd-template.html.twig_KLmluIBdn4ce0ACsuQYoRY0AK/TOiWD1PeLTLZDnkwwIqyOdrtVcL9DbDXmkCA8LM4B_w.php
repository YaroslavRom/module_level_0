<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/liutia/templates/vd-template.html.twig */
class __TwigTemplate_3d5c07929e505cf7ffc0144dd323ca8f0a98b97d0a8be19e923edeb65d9a1c7d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("liutia/liutia-libraries"), "html", null, true);
        echo "

";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 3, $this->source), "html", null, true);
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "  <div class=\"row underline_vidguks\">
    <div class=\"col-lg-3\">
      <div class=\"ava-image\">
      ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["item"], "AVA", [], "any", false, false, true, 8)) {
                // line 9
                echo "        <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "AVA", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" alt=\"user profile image\">
      ";
            } else {
                // line 11
                echo "        <img src=\"/modules/custom/liutia/img/default-user-avatar-300x293.png\" alt=\"user profile image\">
      ";
            }
            // line 13
            echo "      </div>
      <p class=\"usr-name\"><span>";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name:"));
            echo " </span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</p>
      <p class=\"usr-submit\"><span>";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submitted:"));
            echo " </span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "created", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</p>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"image-container\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</div>
      <p class=\"usr-vidguk\"><span>";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Vidguk:"));
            echo " </span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "vidguk", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</p>
    </div>
    <div class=\"col-lg-3\">
      <div class=\"contact-info\">
      <p class=\"usr-email\"><span>";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Email:"));
            echo " </span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "mail", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</p>
      <p class=\"usr-nomer\"><span>";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Nomer:"));
            echo " </span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "nomer", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</p>
      </div>
    </div>


  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/liutia/templates/vd-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  99 => 23,  90 => 19,  86 => 18,  78 => 15,  72 => 14,  69 => 13,  65 => 11,  59 => 9,  57 => 8,  52 => 5,  48 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/liutia/templates/vd-template.html.twig", "/var/www/web/modules/custom/liutia/templates/vd-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "if" => 8);
        static $filters = array("escape" => 1, "trans" => 14);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

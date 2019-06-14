<?php

/* @Twig/form_max_length.html.twig */
class __TwigTemplate_956e980793911a868158580da70a99e63264fbd65a6955d6d2274ac66f57f740 extends Twig_Template
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
        // line 25
        if ($this->getAttribute(($context["attr"] ?? null), "counter", array(), "any", true, true)) {
            // line 26
            echo "  ";
            $context["isRecommandedType"] = ($this->getAttribute(($context["attr"] ?? null), "counter_type", array(), "any", true, true) && ($this->getAttribute(($context["attr"] ?? null), "counter_type", array()) == "recommended"));
            // line 27
            echo "  <small class=\"form-text text-muted text-right maxLength ";
            echo (( !($context["isRecommandedType"] ?? null)) ? ("maxType") : (""));
            echo "\">
      <em>
        ";
            // line 29
            if (($context["isRecommandedType"] ?? null)) {
                // line 30
                echo "          ";
                echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . $this->getAttribute(                // line 33
($context["attr"] ?? null), "counter", array())), "[/2]" => "</span>"));
                // line 35
                echo "
        ";
            } else {
                // line 37
                echo "          ";
                echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters allowed", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . $this->getAttribute(                // line 40
($context["attr"] ?? null), "counter", array())), "[/2]" => "</span>"));
                // line 42
                echo "
        ";
            }
            // line 44
            echo "      </em>
  </small>
";
        }
    }

    public function getTemplateName()
    {
        return "@Twig/form_max_length.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 44,  44 => 42,  42 => 40,  40 => 37,  36 => 35,  34 => 33,  32 => 30,  30 => 29,  24 => 27,  21 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/form_max_length.html.twig", "C:\\Programs\\XAMPP\\htdocs\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\form_max_length.html.twig");
    }
}

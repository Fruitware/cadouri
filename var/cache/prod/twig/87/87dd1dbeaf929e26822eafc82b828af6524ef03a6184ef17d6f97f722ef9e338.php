<?php

/* @PrestaShop/Admin/Security/compromised.html.twig */
class __TwigTemplate_1df694910434c7d1557e25a8a6cfb3f4407ce6aeb0da9665e6956a32a5ec4bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("::base.html.twig", "@PrestaShop/Admin/Security/compromised.html.twig", 25);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
        echo "\" />
  <style>
    .fake-button {
      height: 40px;
      line-height: 30px;
    }

    #csrf-white-container div:first-child {
      background: white;
      padding: 50px;
    }

    #security-compromised-page h1 {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
";
    }

    // line 47
    public function block_title($context, array $blocks = array())
    {
        // line 48
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid token", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "  <div class=\"fluid-container\" id=\"security-compromised-page\" >
      <div id=\"csrf-white-container\" class=\"row justify-content-md-center\">
        <div class=\"col-md-8\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 56
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]Invalid token[/1]: direct access to this link may lead to a potential security breach.", array(), "Admin.Catalog.Help"), array("[1]" => "<b>", "[/1]" => "</b>"));
        echo "
            </p>
          </div>

          <h1 class=\"text-md-center\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you want to display this page?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "</h1>
          <div class=\"text-md-center\">
            <a class=\"btn btn-lg btn-outline-danger mr-3\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["requestUri"] ?? null), "html", null, true);
        echo "\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, I understand the risks", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
            <a class=\"btn btn-lg btn-primary ml-3\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminDashboard"), "html", null, true);
        echo "\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Take me out of there!", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Security/compromised.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 66,  97 => 65,  92 => 63,  88 => 62,  83 => 60,  76 => 56,  69 => 51,  66 => 50,  59 => 48,  56 => 47,  33 => 28,  30 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Security/compromised.html.twig", "C:\\Programs\\XAMPP\\htdocs\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Security\\compromised.html.twig");
    }
}

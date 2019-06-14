<?php

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_149c4846aa271159ac4dc488390cc66f4dd8096822fa71eee00259d7a6897338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
            'content_header' => array($this, 'block_content_header'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return $this->loadTemplate(twig_template_from_string($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getLegacyLayout($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_legacy_controller"), "method"), ((        // line 28
(isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context))) ? (($context["layoutTitle"] ?? null)) : ("")), ((        // line 29
(isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context))) ? (($context["layoutHeaderToolbarBtn"] ?? null)) : (array())), ((        // line 30
(isset($context["layoutDisplayType"]) || array_key_exists("layoutDisplayType", $context))) ? (($context["layoutDisplayType"] ?? null)) : ("")), ((        // line 31
(isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context))) ? (($context["showContentHeader"] ?? null)) : (true)), ((        // line 32
(isset($context["headerTabContent"]) || array_key_exists("headerTabContent", $context))) ? (($context["headerTabContent"] ?? null)) : ("")), ((        // line 33
(isset($context["enableSidebar"]) || array_key_exists("enableSidebar", $context))) ? (($context["enableSidebar"] ?? null)) : (false)), ((        // line 34
(isset($context["help_link"]) || array_key_exists("help_link", $context))) ? (($context["help_link"] ?? null)) : ("")))), "@PrestaShop/Admin/layout.html.twig", 25);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 38
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/layout.html.twig", 38);
        // line 25
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 45
    public function block_translate_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "  <script>
    var translate_javascripts = ";
        // line 47
        echo twig_jsonencode_filter(($context["js_translatable"] ?? null));
        echo ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->intCast($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        echo ";
  </script>
";
    }

    // line 52
    public function block_content_header($context, array $blocks = array())
    {
        // line 53
        echo "  ";
        // line 73
        echo "  ";
        $context["layout"] = $this;
        // line 74
        echo "
  ";
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peek", array(0 => "error"), "method")) > 0)) {
            // line 76
            echo "    ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            echo "
  ";
        }
        // line 78
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peek", array(0 => "failure"), "method")) > 0)) {
            // line 79
            echo "    ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "failure"), "method"));
            echo "
  ";
        }
        // line 81
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peek", array(0 => "success"), "method")) > 0)) {
            // line 82
            echo "    ";
            echo $context["layout"]->getalert("success", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            echo "
  ";
        }
        // line 84
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peek", array(0 => "warning"), "method")) > 0)) {
            // line 85
            echo "    ";
            echo $context["layout"]->getalert("warning", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
            echo "
  ";
        }
    }

    // line 89
    public function block_sidebar_right($context, array $blocks = array())
    {
        // line 90
        echo "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-xs-5 col-sm-4 col-md-4 col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        echo "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading...", array(), "Admin.Global"), "html", null, true);
        echo "\"
    />
  </nav>
";
    }

    // line 53
    public function getalert($__type__ = null, $__flashbagContent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "flashbagContent" => $__flashbagContent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 58
            if ((twig_length_filter($this->env, ($context["flashbagContent"] ?? null)) > 1)) {
                // line 59
                echo "        <ul class=\"alert-text\">
          ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 61
                    echo "            <li>";
                    echo $context["flashMessage"];
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "        </ul>
      ";
            } else {
                // line 65
                echo "        <div class=\"alert-text\">
          ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 67
                    echo "            <p>";
                    echo $context["flashMessage"];
                    echo "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "        </div>
      ";
            }
            // line 71
            echo "    </div>
  ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 71,  202 => 69,  193 => 67,  189 => 66,  186 => 65,  182 => 63,  173 => 61,  169 => 60,  166 => 59,  164 => 58,  156 => 54,  143 => 53,  135 => 97,  131 => 96,  123 => 90,  120 => 89,  112 => 85,  109 => 84,  103 => 82,  100 => 81,  94 => 79,  91 => 78,  85 => 76,  83 => 75,  80 => 74,  77 => 73,  75 => 53,  72 => 52,  65 => 48,  61 => 47,  58 => 46,  55 => 45,  49 => 42,  44 => 41,  41 => 40,  37 => 25,  35 => 38,  29 => 34,  28 => 33,  27 => 32,  26 => 31,  25 => 30,  24 => 29,  23 => 28,  22 => 27,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/layout.html.twig", "C:\\Programs\\XAMPP\\htdocs\\src\\PrestaShopBundle\\Resources\\views\\Admin\\layout.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/nava/templates/views/views-view.html.twig */
class __TwigTemplate_3a65edc9c05579295ef130bf4d60f0de extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["id"] ?? null))), ("view-display-" .         // line 37
($context["display_id"] ?? null)), (((($tmp =         // line 38
($context["dom_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 41
        yield "<div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 41), "html", null, true);
        yield ">
  ";
        // line 42
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 43
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 46
        yield "  ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 47
        if ((($tmp = ($context["header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "    <div class=\"view-header\">
      ";
            // line 49
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 52
        yield "  ";
        if ((($tmp = ($context["exposed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "    <div class=\"view-filters\">
      ";
            // line 54
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 57
        yield "  ";
        if ((($tmp = ($context["attachment_before"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 59
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 62
        yield "
  ";
        // line 63
        if ((($tmp = ($context["rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "    <div class=\"view-content\">
      ";
            // line 65
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        } elseif ((($tmp =         // line 67
($context["empty"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "    <div class=\"view-empty\">
      ";
            // line 69
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 72
        yield "
  ";
        // line 73
        if ((($tmp = ($context["pager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 76
        yield "  ";
        if ((($tmp = ($context["attachment_after"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 78
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 81
        yield "  ";
        if ((($tmp = ($context["more"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 84
        yield "  ";
        if ((($tmp = ($context["footer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "    <div class=\"view-footer\">
      ";
            // line 86
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 89
        yield "  ";
        if ((($tmp = ($context["feed_icons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "    <div class=\"feed-icons\">
      ";
            // line 91
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 94
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/nava/templates/views/views-view.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  187 => 94,  181 => 91,  178 => 90,  175 => 89,  169 => 86,  166 => 85,  163 => 84,  157 => 82,  154 => 81,  148 => 78,  145 => 77,  142 => 76,  136 => 74,  134 => 73,  131 => 72,  125 => 69,  122 => 68,  120 => 67,  115 => 65,  112 => 64,  110 => 63,  107 => 62,  101 => 59,  98 => 58,  95 => 57,  89 => 54,  86 => 53,  83 => 52,  77 => 49,  74 => 48,  72 => 47,  67 => 46,  61 => 44,  59 => 43,  55 => 42,  50 => 41,  48 => 38,  47 => 37,  46 => 36,  45 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/nava/templates/views/views-view.html.twig", "/var/www/html/Koha-2025/themes/contrib/nava/templates/views/views-view.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 34, "if" => 43];
        static $filters = ["clean_class" => 36, "escape" => 41];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "clean_class", 1 => "escape"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}

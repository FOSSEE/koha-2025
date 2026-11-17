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

/* core/themes/stable9/templates/form/form-element.html.twig */
class __TwigTemplate_2106fdd44a42b2637f3d663e381ab712 extends Template
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
        // line 48
        $context["classes"] = ["js-form-item", "form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
($context["type"] ?? null))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["type"] ?? null))), ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["name"] ?? null))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["name"] ?? null))), ((!CoreExtension::inFilter(        // line 55
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 56
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), (((($tmp =         // line 57
($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-item--error") : (""))];
        // line 61
        $context["description_classes"] = ["description", (((        // line 63
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 66
        yield "<div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 66), "html", null, true);
        yield ">
  ";
        // line 67
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 68
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 70
        yield "  ";
        if (((($context["description_display"] ?? null) == "before") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 71
            yield "    <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 71), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 71), "html", null, true);
            yield ">
      ";
            // line 72
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 72), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 75
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
            // line 76
            yield "    <span class=\"field-prefix\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 78
        yield "  ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
  ";
        // line 79
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
            // line 80
            yield "    <span class=\"field-suffix\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 82
        yield "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 83
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 85
        yield "  ";
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "    <div class=\"form-item--error-message\">
      ";
            // line 87
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 90
        yield "  ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 91
            yield "    <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 91), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 91), "html", null, true);
            yield ">
      ";
            // line 92
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 92), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 95
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "description_display", "attributes", "label_display", "label", "description", "prefix", "children", "suffix"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/stable9/templates/form/form-element.html.twig";
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
        return array (  141 => 95,  135 => 92,  130 => 91,  127 => 90,  121 => 87,  118 => 86,  115 => 85,  109 => 83,  106 => 82,  100 => 80,  98 => 79,  93 => 78,  87 => 76,  84 => 75,  78 => 72,  73 => 71,  70 => 70,  64 => 68,  62 => 67,  57 => 66,  55 => 63,  54 => 61,  52 => 57,  51 => 56,  50 => 55,  49 => 54,  48 => 53,  47 => 52,  46 => 51,  45 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/stable9/templates/form/form-element.html.twig", "/var/www/html/Koha-2025/core/themes/stable9/templates/form/form-element.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 48, "if" => 67];
        static $filters = ["clean_class" => 51, "escape" => 66];
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

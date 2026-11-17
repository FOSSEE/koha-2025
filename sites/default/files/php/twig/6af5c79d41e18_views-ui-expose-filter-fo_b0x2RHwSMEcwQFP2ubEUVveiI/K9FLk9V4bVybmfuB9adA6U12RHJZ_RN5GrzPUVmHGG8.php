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

/* core/themes/claro/templates/views/views-ui-expose-filter-form.html.twig */
class __TwigTemplate_26ef4624474b998a65b36fc18436a06c extends Template
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
        // line 22
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "form_description", [], "any", false, false, true, 22), "html", null, true);
        yield "
";
        // line 23
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "expose_button", [], "any", false, false, true, 23), "html", null, true);
        yield "
";
        // line 24
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "required", [], "any", false, false, true, 24), "html", null, true);
        yield "
";
        // line 25
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "group_button", [], "any", false, false, true, 25), "html", null, true);
        yield "
";
        // line 26
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "label", [], "any", false, false, true, 26), "html", null, true);
        yield "
";
        // line 27
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, true, 27), "html", null, true);
        yield "

";
        // line 29
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "operator", [], "any", false, false, true, 29), "html", null, true);
        yield "
";
        // line 30
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, true, 30), "html", null, true);
        yield "

";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "use_operator", [], "any", false, false, true, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "  <div class=\"views-config-group-region\">
    <div class=\"views-group-box\">
      ";
            // line 35
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "use_operator", [], "any", false, false, true, 35), "html", null, true);
            yield "
      ";
            // line 36
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "operator_limit_selection", [], "any", false, false, true, 36), "html", null, true);
            yield "
      ";
            // line 37
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "operator_list", [], "any", false, false, true, 37), "html", null, true);
            yield "
      ";
            // line 38
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "operator_id", [], "any", false, false, true, 38), "html", null, true);
            yield "
    </div>
";
        }
        // line 41
        yield "
";
        // line 46
        $context["remaining_form"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["form"] ?? null), "form_description", "expose_button", "group_button", "required", "label", "description", "operator", "value", "use_operator", "more", "admin_label", "operator_limit_selection", "operator_list", "operator_id");
        // line 63
        yield "
";
        // line 67
        if ((($tmp = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "operator", [], "any", false, false, true, 67)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#type"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "operator", [], "any", false, false, true, 67), "#type", [], "array", false, false, true, 67))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "    <div class=\"views-group-box\">
      ";
            // line 69
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["remaining_form"] ?? null), "html", null, true);
            yield "
    </div>
";
        } else {
            // line 72
            yield "  ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["remaining_form"] ?? null), "html", null, true);
            yield "
";
        }
        // line 74
        yield "
";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "use_operator", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "  </div>
";
        }
        // line 78
        yield "
";
        // line 79
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "admin_label", [], "any", false, false, true, 79), "html", null, true);
        yield "

";
        // line 81
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "more", [], "any", false, false, true, 81), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["form"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/views/views-ui-expose-filter-form.html.twig";
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
        return array (  145 => 81,  140 => 79,  137 => 78,  133 => 76,  131 => 75,  128 => 74,  122 => 72,  116 => 69,  113 => 68,  111 => 67,  108 => 63,  106 => 46,  103 => 41,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 33,  79 => 32,  74 => 30,  70 => 29,  65 => 27,  61 => 26,  57 => 25,  53 => 24,  49 => 23,  45 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/views/views-ui-expose-filter-form.html.twig", "/var/www/html/Koha-2025/core/themes/claro/templates/views/views-ui-expose-filter-form.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 32, "set" => 46];
        static $filters = ["escape" => 22, "without" => 46];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "set"],
                [0 => "escape", 1 => "without"],
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

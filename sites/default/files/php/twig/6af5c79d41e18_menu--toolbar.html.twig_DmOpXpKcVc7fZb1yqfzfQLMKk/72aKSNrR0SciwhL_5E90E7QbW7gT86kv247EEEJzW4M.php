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

/* core/themes/claro/templates/navigation/menu--toolbar.html.twig */
class __TwigTemplate_31b179e4cf7fcae9138eebbaebf4bbfa extends Template
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
        // line 24
        $macros["menus"] = $this->macros["menus"] = $this->getMacroNamespace();
        // line 25
        yield "
";
        // line 30
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(30))->call("menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], $context, 30, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "menu_links" => new \Twig\TwigMacro("menu_links", function ($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup {
                // line 32
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "attributes" => $attributes,
                    "menu_level" => $menu_level,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                    // line 33
                    yield "  ";
                    $macros["menus"] = $this->getMacroNamespace();
                    // line 34
                    yield "  ";
                    if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 35
                        yield "    ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 36
                            yield "      <ul";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar-menu", "claro-toolbar-menu"], "method", false, false, true, 36), "html", null, true);
                            yield ">
    ";
                        } else {
                            // line 38
                            yield "      <ul class=\"toolbar-menu\">
    ";
                        }
                        // line 40
                        yield "    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 41
                            yield "      ";
                            // line 42
                            $context["classes"] = ["menu-item", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 44
$context["item"], "is_expanded", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item--expanded") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 45
$context["item"], "is_collapsed", [], "any", false, false, true, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item--collapsed") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 46
$context["item"], "in_active_trail", [], "any", false, false, true, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item--active-trail") : (""))];
                            // line 49
                            yield "      <li";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 49), "html", null, true);
                            yield ">
        ";
                            // line 50
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 50), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50)), "html", null, true);
                            yield "
        ";
                            // line 51
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 52
                                yield "          ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(52))->call("menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], $context, 52, $this->getSourceContext()));
                                yield "
        ";
                            }
                            // line 54
                            yield "      </li>
    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 56
                        yield "    </ul>
  ";
                    }
                    yield from [];
                })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "attributes" => false, "menu_level" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/navigation/menu--toolbar.html.twig";
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
        return array (  131 => 56,  123 => 54,  117 => 52,  115 => 51,  111 => 50,  106 => 49,  104 => 46,  103 => 45,  102 => 44,  101 => 42,  99 => 41,  94 => 40,  90 => 38,  84 => 36,  81 => 35,  78 => 34,  75 => 33,  63 => 32,  50 => 30,  47 => 25,  45 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/navigation/menu--toolbar.html.twig", "/var/www/html/Koha-2025/core/themes/claro/templates/navigation/menu--toolbar.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 24, "macro" => 32, "if" => 34, "for" => 40, "set" => 42];
        static $filters = ["escape" => 36];
        static $functions = ["link" => 50];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "import", 1 => "macro", 2 => "if", 3 => "for", 4 => "set"],
                [0 => "escape"],
                [0 => "link"],
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

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

/* themes/contrib/nava/templates/navigation/menu.html.twig */
class __TwigTemplate_3c5e08e3fced677a874a6ae965a96d9d extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this->getMacroNamespace();
        // line 22
        yield "
";
        // line 27
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(27))->call("menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], $context, 27, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "menu_links" => new \Twig\TwigMacro("menu_links", function ($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup {
                // line 29
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "attributes" => $attributes,
                    "menu_level" => $menu_level,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                    // line 30
                    yield "  ";
                    $macros["menus"] = $this->getMacroNamespace();
                    // line 31
                    yield "  ";
                    if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 32
                        yield "    ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 33
                            yield "      <ul";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 33), "html", null, true);
                            yield ">
    ";
                        } else {
                            // line 35
                            yield "      <ul class=\"submenu\">
    ";
                        }
                        // line 37
                        yield "      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 38
                            yield "        ";
                            $context["item_classes"] = ["menu-item", ("menu-item-level-" . (                            // line 40
($context["menu_level"] ?? null) + 1)), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 41
$context["item"], "in_active_trail", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item-active") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 42
$context["item"], "below", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item-has-children") : (""))];
                            // line 45
                            yield "        <li";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 45), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 45), "html", null, true);
                            yield ">
          ";
                            // line 51
                            yield "          ";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 51), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51)), "html", null, true);
                            yield "

          ";
                            // line 53
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 54
                                yield "            ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(54))->call("menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 54), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], $context, 54, $this->getSourceContext()));
                                yield "
          ";
                            }
                            // line 56
                            yield "        </li>
      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 58
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
        return "themes/contrib/nava/templates/navigation/menu.html.twig";
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
        return array (  132 => 58,  124 => 56,  118 => 54,  116 => 53,  110 => 51,  105 => 45,  103 => 42,  102 => 41,  101 => 40,  99 => 38,  94 => 37,  90 => 35,  84 => 33,  81 => 32,  78 => 31,  75 => 30,  63 => 29,  50 => 27,  47 => 22,  45 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/nava/templates/navigation/menu.html.twig", "/var/www/html/Koha-2025/themes/contrib/nava/templates/navigation/menu.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 38];
        static $filters = ["escape" => 33];
        static $functions = ["link" => 51];
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

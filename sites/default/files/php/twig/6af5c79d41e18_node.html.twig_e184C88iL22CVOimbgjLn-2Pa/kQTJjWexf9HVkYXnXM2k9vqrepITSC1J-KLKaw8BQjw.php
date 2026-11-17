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

/* themes/contrib/nava/templates/content/node.html.twig */
class __TwigTemplate_689b161c4be3239096ba0e9db2acf436 extends Template
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
        // line 70
        $context["classes"] = ["node", ("node-type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72))), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node-promoted") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node-sticky") : ("")), (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node-unpublished") : ("")), (((($tmp =         // line 76
($context["view_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("node-view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 79
        yield "<article";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 79), "html", null, true);
        yield ">
  <header class=\"node-header\">
    ";
        // line 81
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
    ";
        // line 82
        if (((($tmp = ($context["label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 83
            yield "      <h2";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node-title"], "method", false, false, true, 83), "html", null, true);
            yield ">
        <a href=\"";
            // line 84
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
      </h2>
    ";
        }
        // line 87
        yield "    ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
    ";
        // line 88
        if ((($tmp = ($context["display_submitted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "      <div class=\"node-meta\">
        ";
            // line 90
            if ((($tmp = ($context["author_picture"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                yield "          <div class=\"node-author-img\">
            ";
                // line 92
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 95
            yield "        <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node-date-author"], "method", false, false, true, 95), "html", null, true);
            yield ">
          <div class=\"node-author\"><i class=\"ficon-user\"></i> ";
            // line 96
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            yield " ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true);
            yield "</div><div class=\"node-date\"><i class=\"ficon-calendar\"></i> ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
            yield "</div>
          ";
            // line 97
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 101
        yield "  </header>
  <div";
        // line 102
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node-content"], "method", false, false, true, 102), "html", null, true);
        yield ">
    ";
        // line 103
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "label", "page", "title_attributes", "url", "title_suffix", "display_submitted", "author_picture", "author_attributes", "author_name", "date", "metadata", "content_attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/nava/templates/content/node.html.twig";
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
        return array (  125 => 103,  121 => 102,  118 => 101,  111 => 97,  103 => 96,  98 => 95,  92 => 92,  89 => 91,  87 => 90,  84 => 89,  82 => 88,  77 => 87,  69 => 84,  64 => 83,  62 => 82,  58 => 81,  52 => 79,  50 => 76,  49 => 75,  48 => 74,  47 => 73,  46 => 72,  45 => 70,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/nava/templates/content/node.html.twig", "/var/www/html/Koha-2025/themes/contrib/nava/templates/content/node.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 70, "if" => 82];
        static $filters = ["clean_class" => 72, "escape" => 79, "t" => 96];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "clean_class", 1 => "escape", 2 => "t"],
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

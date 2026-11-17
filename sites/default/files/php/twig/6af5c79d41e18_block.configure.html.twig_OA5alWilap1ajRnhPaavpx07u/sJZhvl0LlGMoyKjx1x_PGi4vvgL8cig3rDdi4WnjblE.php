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

/* @help_topics/block.configure.html.twig */
class __TwigTemplate_d94fbae3aa7088af84d901deed2de3d8 extends Template
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
        // line 7
        $context["layout_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Block layout", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["layout_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["layout_link_text"] ?? null), "block.admin_display"));
        // line 9
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 10
        yield t("Configure the settings of a block that was previously placed in a region of a theme.", []);
        yield "</p>
<h2>";
        // line 11
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 13
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@layout_link</em>.", ["@layout_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["layout_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 14
        yield t("Click the name of the theme that contains the block.", []);
        yield "</li>
  <li>";
        // line 15
        yield t("Optionally, click <em>Demonstrate block regions</em> to see the regions of the theme.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("If you only want to change the region where a block is located, or the ordering of blocks within a region, drag blocks to their desired positions and click <em>Save blocks</em>.", []);
        yield "</li>
<li>";
        // line 17
        yield t("If you want to change additional settings, find the region where the block you want to update is currently located, and click <em>Configure</em> in the line of the block description.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Edit the block\x27s settings. The available settings vary depending on the module that provides the block, but for all blocks you can change:", []);
        // line 19
        yield "    <ul>
      <li>";
        // line 20
        yield t("<em>Block title</em>: The heading for the block on your site -- for some blocks, you will need to check the <em>Override title</em> checkbox in order to enter a title", []);
        yield "</li>
      <li>";
        // line 21
        yield t("<em>Display title</em>: Check the box if you want the title displayed", []);
        yield "</li>
      <li>";
        // line 22
        yield t("<em>Visibility</em>: Add conditions for when the block should be displayed", []);
        yield "</li>
      <li>";
        // line 23
        yield t("<em>Region</em>: Change the theme region the block is displayed in", []);
        yield "</li>
    </ul>
  </li>
  <li>";
        // line 26
        yield t("Click <em>Save block</em>.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/block.configure.html.twig";
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
        return array (  109 => 26,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  88 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  52 => 9,  50 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/block.configure.html.twig", "/var/www/html/Koha-2025/core/modules/block/help_topics/block.configure.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "trans" => 7];
        static $filters = ["escape" => 13];
        static $functions = ["render_var" => 8, "help_route_link" => 8];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link"],
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

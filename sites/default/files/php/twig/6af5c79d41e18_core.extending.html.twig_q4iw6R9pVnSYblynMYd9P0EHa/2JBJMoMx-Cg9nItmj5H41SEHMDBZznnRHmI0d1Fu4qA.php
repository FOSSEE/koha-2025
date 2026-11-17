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

/* @help_topics/core.extending.html.twig */
class __TwigTemplate_4eacf4b22ab37860472d00ef7f5619a5 extends Template
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
        // line 5
        yield "<h2>";
        yield t("What is a module?", []);
        yield "</h2>
<p>";
        // line 6
        yield t("A <em>module</em> is a set of PHP, JavaScript, and/or CSS files that extends site features and adds functionality. A set of <em>Core modules</em> is distributed as part of the core software download. Additional <em>Contributed modules</em> can be downloaded separately from the <a href=\"https://www.drupal.org/project/project_module\">Download &amp; Extend page on drupal.org</a>.", []);
        yield "</p>
<h2>";
        // line 7
        yield t("What is an Experimental module?", []);
        yield "</h2>
<p>";
        // line 8
        yield t("An <em>Experimental</em> module is a module that is still in development and is not yet stable. Using Experimental modules on production sites is not recommended.", []);
        yield "</p>
<h2>";
        // line 9
        yield t("What are installing and uninstalling?", []);
        yield "</h2>
<p>";
        // line 10
        yield t("Installing a core or downloaded contributed module means turning it on, so that you can use its features and functionality. Uninstalling means turning it off and removing all of its configuration. A module cannot be uninstalled if another installed module depends on it, or if you have created content on your site using the module -- you would need to delete the content and uninstall dependent modules first.", []);
        yield "</p>
<h2>";
        // line 11
        yield t("Extending overview", []);
        yield "</h2>
<p>";
        // line 12
        yield t("See the related topics listed below for help performing tasks related to extending the functionality of your site.", []);
        yield "</p>
<h2>";
        // line 13
        yield t("Additional resources", []);
        yield "</h2>
<ul>
    <li>";
        // line 15
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/understanding-modules.html\">Concept: Modules (Drupal User Guide)</a>", []);
        yield "</li>
    <li>";
        // line 16
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/extend-chapter.html\">Extending and Customizing Your Site (Drupal User Guide)</a>", []);
        yield "</li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/core.extending.html.twig";
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
        return array (  87 => 16,  83 => 15,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  45 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/core.extending.html.twig", "/var/www/html/Koha-2025/core/modules/help/help_topics/core.extending.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["trans" => 5];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "trans"],
                [],
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

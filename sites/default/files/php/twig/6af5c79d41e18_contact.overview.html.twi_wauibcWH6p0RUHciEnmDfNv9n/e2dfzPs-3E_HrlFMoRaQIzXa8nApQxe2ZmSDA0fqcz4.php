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

/* @help_topics/contact.overview.html.twig */
class __TwigTemplate_a9087eb6538cbe873de4979a0ed642f3 extends Template
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
        yield t("What are contact forms?", []);
        yield "</h2>
<p>";
        // line 6
        yield t("There are two different types of contact forms provided by the core Contact module: personal contact forms, which allow users to contact other users on the site, and site-wide contact forms, which allow users to contact site managers or administrators. A site can have more than one site-wide contact form; each has its own fields to fill out, recipients, and URL; you can also change the fields that are shown on personal contact forms.", []);
        yield "</p>
<h2>";
        // line 7
        yield t("Using the personal contact form", []);
        yield "</h2>
<p>";
        // line 8
        yield t("Site visitors can email registered users on your site by using the personal contact form, without knowing or learning the email address of the recipient. When a user with the correct permissions is viewing another user\x27s profile, the viewer will see a <em>Contact</em> tab or link, which leads to the personal contact form if the user whose profile is being viewed has their personal contact form enabled (this is a user account setting).", []);
        yield "</p>
<h2>";
        // line 9
        yield t("Contact form management tasks", []);
        yield "</h2>
<p>";
        // line 10
        yield t("See the related topics below for specific tasks.", []);
        yield "</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/contact.overview.html.twig";
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
        return array (  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  45 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/contact.overview.html.twig", "/var/www/html/Koha-2025/core/modules/contact/help_topics/contact.overview.html.twig");
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

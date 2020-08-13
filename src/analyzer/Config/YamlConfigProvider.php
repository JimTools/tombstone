<?php

declare(strict_types=1);

namespace Scheb\Tombstone\Analyzer\Config;

use Scheb\Tombstone\Core\Model\RootPath;
use Scheb\Tombstone\Core\PathNormalizer;
use Symfony\Component\Yaml\Yaml;

class YamlConfigProvider implements ConfigProviderInterface
{
    /**
     * @var string
     */
    private $configFile;

    /**
     * @var RootPath
     */
    private $rootPath;

    public function __construct(string $configFile)
    {
        $this->configFile = $configFile;

        // Make all paths relative to config file path
        $this->rootPath = new RootPath(\dirname(realpath($this->configFile)));
    }

    public function readConfiguration(): array
    {
        $config = Yaml::parseFile($this->configFile);

        if (isset($config['source_code']['root_directory'])) {
            $config['source_code']['root_directory'] = $this->resolvePath($config['source_code']['root_directory']);
        }

        if (isset($config['logs']['directory'])) {
            $config['logs']['directory'] = $this->resolvePath($config['logs']['directory']);
        }

        if (isset($config['report']['php'])) {
            $config['report']['php'] = $this->resolvePath($config['report']['php']);
        }

        if (isset($config['report']['checkstyle'])) {
            $config['report']['checkstyle'] = $this->resolvePath($config['report']['checkstyle']);
        }

        if (isset($config['report']['html'])) {
            $config['report']['html'] = $this->resolvePath($config['report']['html']);
        }

        return $config;
    }

    private function resolvePath(string $filePath): string
    {
        return PathNormalizer::normalizeDirectorySeparatorForEnvironment(
            $this->rootPath
                ->createFilePath($filePath)
                ->getAbsolutePath()
        );
    }
}

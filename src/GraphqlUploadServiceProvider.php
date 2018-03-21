<?php

namespace Drupal\graphql_examples;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Custom ServiceProvider.
 */
class GraphqlExamplesServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    /**
     * Override default QueryRouteEnhancer class.
     */

    $container
      ->getDefinition('simple_oauth.authentication.simple_oauth')
      ->setClass('Drupal\graphql_examples\Authentication\Provider\GraphQLSimpleOauthAuthenticationProvider');
  }
}
<?php
/*******************************************************************************
 * Copyright (c) cortical.io GmbH. All rights reserved.
 *
 * This software is confidential and proprietary information.
 * You shall use it only in accordance with the terms of the
 * license agreement you entered into with cortical.io GmbH.
 ******************************************************************************/

/**
 * Finder print model class.
 */
class FingerprintCluster {

  static $swaggerTypes = array(
      'positions' => 'array[int]',
      'clusters' => 'array[Cluster]'

    );

  public $positions; // array[int]
  public $clusters; // array[Cluster]
  }


# Deppenapostroph

[![Build Status](https://travis-ci.org/gdmobile/deppenapostroph.svg?branch=master)](https://travis-ci.org/gdmobile/deppenapostroph) [![License](https://poser.pugx.org/gdmobile/deppenapostroph/license)](https://packagist.org/packages/gdmobile/deppenapostroph) [![Latest Stable Version](https://poser.pugx.org/gdmobile/deppenapostroph/version)](https://packagist.org/packages/gdmobile/deppenapostroph)

Small library to check and transform the genitive of names for german language.

## Installation

	composer require gdmobile/deppenapostroph
	
## Usage

	$name = 'Heiko';
	$result = Deppenapostroph::needsApostropheOnly($name);
	# $result == false
	
	$transformed = Deppenapostroph::transform($name);
	# $transformed == 'Heikos'
